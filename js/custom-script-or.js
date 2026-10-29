// 3D Animated Operating Room //
(function () {
  "use strict";
  var NS = "http://www.w3.org/2000/svg";
  var S = 62,
    OX = 600,
    OY = 215,
    C = Math.sqrt(3) / 2;
  function P(x, y, z) {
    return [OX + (x - y) * C * S, OY + (x + y) * 0.5 * S - z * S];
  }
  function r1(n) {
    return Math.round(n * 10) / 10;
  }
  function pt(a) {
    var p = P(a[0], a[1], a[2]);
    return r1(p[0]) + "," + r1(p[1]);
  }
  function el(tag, attrs, parent) {
    var e = document.createElementNS(NS, tag);
    for (var k in attrs) e.setAttribute(k, attrs[k]);
    if (parent) parent.appendChild(e);
    return e;
  }
  function poly(g, pts, cls) {
    return el(
      "polygon",
      { points: pts.map(pt).join(" "), class: cls, pathLength: 1 },
      g,
    );
  }
  function path(g, pts, cls) {
    return el(
      "polyline",
      { points: pts.map(pt).join(" "), class: cls || "ln", pathLength: 1 },
      g,
    );
  }

  function ring(c, r, plane, n) {
    var out = [],
      i,
      a;
    n = n || 30;
    for (i = 0; i < n; i++) {
      a = (i / n) * Math.PI * 2;
      if (plane === "xy")
        out.push([c[0] + r * Math.cos(a), c[1] + r * Math.sin(a), c[2]]);
      else if (plane === "xz")
        out.push([c[0] + r * Math.cos(a), c[1], c[2] + r * Math.sin(a)]);
      else out.push([c[0], c[1] + r * Math.cos(a), c[2] + r * Math.sin(a)]);
    }
    return out;
  }
  function box(g, x0, y0, z0, x1, y1, z1) {
    poly(
      g,
      [
        [x0, y1, z0],
        [x1, y1, z0],
        [x1, y1, z1],
        [x0, y1, z1],
      ],
      "face f-l",
    );
    poly(
      g,
      [
        [x1, y0, z0],
        [x1, y1, z0],
        [x1, y1, z1],
        [x1, y0, z1],
      ],
      "face f-r",
    );
    poly(
      g,
      [
        [x0, y0, z1],
        [x1, y0, z1],
        [x1, y1, z1],
        [x0, y1, z1],
      ],
      "face f-t",
    );
  }
  function hull(pts) {
    pts = pts.slice().sort(function (a, b) {
      return a[0] - b[0] || a[1] - b[1];
    });
    function cross(o, a, b) {
      return (a[0] - o[0]) * (b[1] - o[1]) - (a[1] - o[1]) * (b[0] - o[0]);
    }
    var lo = [],
      up = [],
      i;
    for (i = 0; i < pts.length; i++) {
      while (
        lo.length >= 2 &&
        cross(lo[lo.length - 2], lo[lo.length - 1], pts[i]) <= 0
      )
        lo.pop();
      lo.push(pts[i]);
    }
    for (i = pts.length - 1; i >= 0; i--) {
      while (
        up.length >= 2 &&
        cross(up[up.length - 2], up[up.length - 1], pts[i]) <= 0
      )
        up.pop();
      up.push(pts[i]);
    }
    up.pop();
    lo.pop();
    return lo.concat(up);
  }

  var ANCHORS = {
    ceiling: [0, 3, 3],
    doors: [0, 1.9, 1.1],
    walls: [0, 5.7, 2.6],
    scrub: [0.5, 7.05, 0.95],
    floor: [4.5, 3, 0],
    integration: [0, 4.4, 1.65],
    control: [2.1, 0, 1.55],
    laminar: [4.2, 1.8, 2.7],
    lights: [3.8, 2.3, 2.15],
    gases: [5, 0, 0.95],
  };

  var DRAW = {
    floor: function (g) {
      poly(
        g,
        [
          [0, 0, 0],
          [6, 0, 0],
          [6, 6, 0],
          [0, 6, 0],
        ],
        "face f-floor",
      );
      var i;
      for (i = 1; i < 6; i++) {
        path(
          g,
          [
            [i, 0, 0],
            [i, 6, 0],
          ],
          "ln faint grid",
        );
        path(
          g,
          [
            [0, i, 0],
            [6, i, 0],
          ],
          "ln faint grid",
        );
      }
      poly(
        g,
        [
          [0, 0, 0],
          [6, 0, 0],
          [6, 6, 0],
          [0, 6, 0],
        ],
        "hl",
      );
    },
    walls: function (g) {
      var L = [
          [0, 0, 0],
          [0, 6, 0],
          [0, 6, 3],
          [0, 0, 3],
        ],
        R = [
          [0, 0, 0],
          [6, 0, 0],
          [6, 0, 3],
          [0, 0, 3],
        ],
        i;
      poly(g, L, "face f-wl");
      poly(g, R, "face f-wr");
      for (i = 1; i < 5; i++) {
        path(
          g,
          [
            [0, i * 1.2, 0],
            [0, i * 1.2, 3],
          ],
          "ln faint",
        );
        path(
          g,
          [
            [i * 1.2, 0, 0],
            [i * 1.2, 0, 3],
          ],
          "ln faint",
        );
      }
      path(
        g,
        [
          [0, 0, 0.15],
          [0, 6, 0.15],
        ],
        "ln faint",
      );
      path(
        g,
        [
          [0, 0, 0.15],
          [6, 0, 0.15],
        ],
        "ln faint",
      );
      var pull = el("g", { class: "pull" }, g);
      poly(
        pull,
        [
          [0, 0, 0.15],
          [1.2, 0, 0.15],
          [1.2, 0, 3],
          [0, 0, 3],
        ],
        "face f-wr",
      );
      poly(g, L, "hl");
      poly(g, R, "hl");
    },
    doors: function (g) {
      poly(
        g,
        [
          [0, 1, 0],
          [0, 2.8, 0],
          [0, 2.8, 2.25],
          [0, 1, 2.25],
        ],
        "face f-door",
      );
      poly(
        g,
        [
          [0, 1.2, 0],
          [0, 2.6, 0],
          [0, 2.6, 2.1],
          [0, 1.2, 2.1],
        ],
        "face f-gap",
      );
      var slide = el("g", { class: "slide" }, g);
      poly(
        slide,
        [
          [0, 1.2, 0],
          [0, 2.6, 0],
          [0, 2.6, 2.1],
          [0, 1.2, 2.1],
        ],
        "hl face f-leaf",
      );
      poly(
        slide,
        [
          [0, 1.55, 1.25],
          [0, 2.25, 1.25],
          [0, 2.25, 1.85],
          [0, 1.55, 1.85],
        ],
        "ln",
      );
      path(
        g,
        [
          [0, 0.8, 2.4],
          [0, 3.8, 2.4],
        ],
        "ln",
      );
      path(
        g,
        [
          [0, 0.8, 2.25],
          [0, 3.8, 2.25],
        ],
        "ln",
      );
    },
    scrub: function (g) {
      poly(
        g,
        [
          [0, 6.12, 0],
          [1.6, 6.12, 0],
          [1.6, 7.95, 0],
          [0, 7.95, 0],
        ],
        "face f-t",
      );
      poly(
        g,
        [
          [0, 6, 0],
          [0, 7.95, 0],
          [0, 7.95, 2.2],
          [0, 6, 2.2],
        ],
        "face f-wl",
      );
      box(g, 0, 6, 0, 1.3, 6.12, 2.2);
      poly(
        g,
        [
          [0, 6.12, 0],
          [1.6, 6.12, 0],
          [1.6, 7.95, 0],
          [0, 7.95, 0],
        ],
        "hl hl-soft",
      );
      box(g, 0, 6.35, 0, 0.45, 7.75, 0.85);
      box(g, 0, 6.35, 0.85, 0.55, 7.75, 0.95);
      poly(
        g,
        [
          [0.12, 6.35, 0.95],
          [0.12, 7.75, 0.95],
          [0.12, 7.75, 1.9],
          [0.12, 6.35, 1.9],
        ],
        "hl face f-panel",
      );
      path(
        g,
        [
          [0.2, 6.75, 0.95],
          [0.2, 6.75, 1.35],
          [0.45, 6.75, 1.35],
        ],
        "ln",
      );
      path(
        g,
        [
          [0.2, 7.35, 0.95],
          [0.2, 7.35, 1.35],
          [0.45, 7.35, 1.35],
        ],
        "ln",
      );
      path(
        g,
        [
          [0.45, 6.75, 1.3],
          [0.45, 6.75, 0.97],
        ],
        "ln flow only-active",
      );
      path(
        g,
        [
          [0.45, 7.35, 1.3],
          [0.45, 7.35, 0.97],
        ],
        "ln flow only-active",
      );
    },
    integration: function (g) {
      var X = 0.05;
      poly(
        g,
        [
          [X, 3.45, 1.1],
          [X, 5.35, 1.1],
          [X, 5.35, 2.2],
          [X, 3.45, 2.2],
        ],
        "hl face f-panel",
      );
      poly(
        g,
        [
          [X, 3.54, 1.19],
          [X, 5.26, 1.19],
          [X, 5.26, 2.11],
          [X, 3.54, 2.11],
        ],
        "ln",
      );
      path(
        g,
        [
          [X, 4.55, 1.19],
          [X, 4.55, 2.11],
        ],
        "ln",
      );
      path(
        g,
        [
          [X, 4.55, 1.65],
          [X, 5.26, 1.65],
        ],
        "ln",
      );
      poly(g, ring([X, 4.05, 1.65], 0.3, "yz", 24), "ln");
      path(
        g,
        [
          [X, 3.7, 1.65],
          [X, 4.4, 1.65],
        ],
        "ln faint",
      );
      path(
        g,
        [
          [X, 4.05, 1.32],
          [X, 4.05, 1.98],
        ],
        "ln faint",
      );
      el(
        "polygon",
        {
          points: ring([X, 3.67, 2.0], 0.04, "yz", 10).map(pt).join(" "),
          class: "rec",
        },
        g,
      );
      poly(g, ring([X, 4.9, 1.88], 0.14, "yz", 16), "ln");
      path(
        g,
        [
          [X, 4.9, 1.74],
          [X, 4.9, 2.02],
        ],
        "ln faint",
      );
      path(
        g,
        [
          [X, 4.68, 1.55],
          [X, 5.18, 1.55],
        ],
        "ln feed",
      );
      path(
        g,
        [
          [X, 4.68, 1.44],
          [X, 5.06, 1.44],
        ],
        "ln feed",
      );
      path(
        g,
        [
          [X, 4.68, 1.33],
          [X, 5.14, 1.33],
        ],
        "ln feed",
      );
    },
    control: function (g) {
      poly(
        g,
        [
          [1.6, 0, 1.2],
          [2.6, 0, 1.2],
          [2.6, 0, 1.9],
          [1.6, 0, 1.9],
        ],
        "hl face f-panel",
      );
      poly(
        g,
        [
          [1.7, 0, 1.35],
          [2.5, 0, 1.35],
          [2.5, 0, 1.82],
          [1.7, 0, 1.82],
        ],
        "ln",
      );
      path(
        g,
        [
          [1.75, 0, 1.27],
          [2.45, 0, 1.27],
        ],
        "ln",
      );
      path(
        g,
        [
          [1.75, 0, 1.55],
          [1.95, 0, 1.55],
          [2.0, 0, 1.72],
          [2.07, 0, 1.38],
          [2.14, 0, 1.6],
          [2.2, 0, 1.55],
          [2.45, 0, 1.55],
        ],
        "ln wave",
      );
    },
    gases: function (g) {
      poly(
        g,
        [
          [4.2, 0, 0.8],
          [5.8, 0, 0.8],
          [5.8, 0, 1.1],
          [4.2, 0, 1.1],
        ],
        "hl face f-panel",
      );
      var i, c;
      for (i = 0; i < 5; i++) {
        c = [4.45 + i * 0.3, 0, 0.95];
        poly(g, ring(c, 0.07, "xz", 14), "ln");
        el(
          "polygon",
          {
            points: ring(c, 0.07, "xz", 14).map(pt).join(" "),
            class: "ln ping",
            style: "--k:" + i,
          },
          g,
        );
      }
    },
    table: function (g) {
      box(g, 2.5, 2.8, 0, 3.5, 3.2, 0.08);
      box(g, 2.9, 2.9, 0.08, 3.1, 3.1, 0.85);
      box(g, 2.0, 2.7, 0.85, 4.0, 3.3, 0.97);
    },
    ceiling: function (g) {
      var i;
      for (i = 1; i < 5; i++) {
        path(
          g,
          [
            [i * 1.2, 0, 3],
            [i * 1.2, 6, 3],
          ],
          "ln faint dash",
        );
        path(
          g,
          [
            [0, i * 1.2, 3],
            [6, i * 1.2, 3],
          ],
          "ln faint dash",
        );
      }
      path(
        g,
        [
          [0, 6, 3],
          [6, 6, 3],
          [6, 0, 3],
        ],
        "ln dash",
      );
      path(
        g,
        [
          [6, 6, 0],
          [6, 6, 3],
        ],
        "ln faint dash",
      );
      path(
        g,
        [
          [0, 6, 0],
          [0, 6, 3],
        ],
        "ln faint dash",
      );
      path(
        g,
        [
          [6, 0, 0],
          [6, 0, 3],
        ],
        "ln faint dash",
      );
      poly(
        g,
        [
          [0, 0, 3],
          [6, 0, 3],
          [6, 6, 3],
          [0, 6, 3],
        ],
        "hl hl-soft",
      );
      var lift = el("g", { class: "lift" }, g);
      poly(
        lift,
        [
          [4.8, 4.8, 3],
          [6, 4.8, 3],
          [6, 6, 3],
          [4.8, 6, 3],
        ],
        "ln",
      );
      poly(
        lift,
        [
          [4.8, 4.8, 3],
          [6, 4.8, 3],
          [6, 6, 3],
          [4.8, 6, 3],
        ],
        "hl",
      );
      path(
        g,
        [
          [0, 6, 3],
          [6, 6, 3],
          [6, 0, 3],
        ],
        "hit",
      );
    },
    laminar: function (g) {
      var i,
        j,
        a = 1.8,
        b = 4.2,
        zt = 2.75,
        zb = 2.6;
      poly(
        g,
        [
          [a, a, zb],
          [b, a, zb],
          [b, b, zb],
          [a, b, zb],
        ],
        "hl",
      );
      poly(
        g,
        [
          [a, a, zt],
          [b, a, zt],
          [b, b, zt],
          [a, b, zt],
        ],
        "ln",
      );
      poly(
        g,
        [
          [a, a, zb],
          [b, a, zb],
          [b, b, zb],
          [a, b, zb],
        ],
        "ln",
      );
      [
        [a, a],
        [b, a],
        [b, b],
        [a, b],
      ].forEach(function (c) {
        path(
          g,
          [
            [c[0], c[1], zb],
            [c[0], c[1], zt],
          ],
          "ln",
        );
      });
      for (i = 1; i < 4; i++) {
        path(
          g,
          [
            [a + i * 0.6, a, zb],
            [a + i * 0.6, b, zb],
          ],
          "ln faint",
        );
        path(
          g,
          [
            [a, a + i * 0.6, zb],
            [b, a + i * 0.6, zb],
          ],
          "ln faint",
        );
      }
      for (i = 0; i < 3; i++)
        for (j = 0; j < 3; j++) {
          var x = 2.4 + i * 0.6,
            y = 2.4 + j * 0.6;
          path(
            g,
            [
              [x, y, zb - 0.05],
              [x, y, 1.1],
            ],
            "ln flow",
          );
          path(
            g,
            [
              [x - 0.07, y - 0.07, 1.25],
              [x, y, 1.1],
              [x + 0.07, y + 0.07, 1.25],
            ],
            "ln faint",
          );
        }
    },
    lights: function (g) {
      var hub = [3, 3, 2.7],
        spot = [3, 3, 0.97],
        heads = [
          [2.3, 3.7, 2.15],
          [3.8, 2.3, 2.15],
        ];
      heads.forEach(function (h) {
        var pts = ring(h, 0.46, "xy", 18)
          .concat(ring(spot, 0.55, "xy", 18))
          .map(function (p) {
            return P(p[0], p[1], p[2]);
          });
        el(
          "polygon",
          {
            points: hull(pts)
              .map(function (p) {
                return r1(p[0]) + "," + r1(p[1]);
              })
              .join(" "),
            class: "beam",
          },
          g,
        );
      });
      heads.forEach(function (h) {
        path(
          g,
          [hub, [h[0], h[1], h[2] + 0.5], [h[0], h[1], h[2] + 0.06]],
          "ln",
        );
        poly(g, ring(h, 0.46, "xy"), "hl face f-lamp");
        poly(g, ring(h, 0.3, "xy"), "ln");
        poly(g, ring(h, 0.1, "xy", 16), "ln");
      });
      poly(g, ring(hub, 0.1, "xy", 16), "face f-lamp");
    },
  };
  var ORDER = [
    "floor",
    "walls",
    "doors",
    "scrub",
    "integration",
    "control",
    "gases",
    "table",
    "ceiling",
    "laminar",
    "lights",
  ];

  function text(g, x, y, rot, str) {
    var t = el(
      "text",
      {
        x: r1(x),
        y: r1(y),
        transform: "rotate(" + rot + " " + r1(x) + " " + r1(y) + ")",
        "text-anchor": "middle",
      },
      g,
    );
    t.textContent = str;
    return t;
  }
  function dims(root) {
    var g = el("g", { class: "dims", "aria-hidden": "true" }, root),
      m;
    path(
      g,
      [
        [0, 8.05, 0],
        [0, 8.55, 0],
      ],
      "ln",
    );
    path(
      g,
      [
        [6, 6.15, 0],
        [6, 8.55, 0],
      ],
      "ln",
    );
    path(
      g,
      [
        [0, 8.35, 0],
        [6, 8.35, 0],
      ],
      "ln",
    );
    m = P(3, 8.35, 0);
    text(g, m[0] - 8, m[1] + 18, 30, "6.0 m");
    path(
      g,
      [
        [6.15, 0, 0],
        [7.15, 0, 0],
      ],
      "ln",
    );
    path(
      g,
      [
        [6.15, 6, 0],
        [7.15, 6, 0],
      ],
      "ln",
    );
    path(
      g,
      [
        [7, 0, 0],
        [7, 6, 0],
      ],
      "ln",
    );
    m = P(7, 3, 0);
    text(g, m[0] + 8, m[1] + 18, -30, "6.0 m");
  }
  function badge(root) {
    var g = el("g", { class: "badge", "aria-hidden": "true" }, root);
    el("circle", { cx: 880, cy: 120, r: 30 }, g);
    el("path", { d: "M866,121 L876,132 L896,108", class: "tick" }, g);
  }

  function draw(svg, opts) {
    opts = opts || {};
    var parts = {},
      root = el("g", { class: "room" }, svg),
      n = 0;
    if (opts.dims) dims(root);
    ORDER.forEach(function (id) {
      if (opts.only && (id === "table" || opts.only.indexOf(id) < 0)) return;
      var g = el(
        "g",
        id === "table"
          ? { class: "static", style: "--i:5" }
          : {
              class: "part part--" + id,
              "data-part": id,
              tabindex: "-1",
              focusable: "false",
              style: "--i:" + n++,
            },
        root,
      );
      DRAW[id](g);
      if (id !== "table") parts[id] = g;
    });
    if (opts.badge) badge(root);
    if (opts.only) {
      try {
        var b = root.getBBox(),
          pad = 16;
        svg.setAttribute(
          "viewBox",
          [
            r1(b.x - pad),
            r1(b.y - pad),
            r1(b.width + 2 * pad),
            r1(b.height + 2 * pad),
          ].join(" "),
        );
      } catch (err) {}
    }
    var proxies = {};
    for (var id in parts) proxies[id] = [parts[id]];
    return {
      parts: parts,
      proxies: proxies,
      setActive: function (id) {
        for (var k in parts) parts[k].classList.toggle("is-active", k === id);
      },
      setActiveSet: function (ids) {
        for (var k in parts)
          parts[k].classList.toggle("is-active", ids.indexOf(k) >= 0);
      },
    };
  }
  function anchor(id) {
    var p = P.apply(null, ANCHORS[id]);
    return [r1(p[0]), r1(p[1])];
  }
  window.OTRoom = {
    draw: draw,
    anchor: anchor,
    anchors3d: ANCHORS,
    P: P,
    el: el,
  };
})();

(function () {
  "use strict";
  var hero = document.querySelector("[data-ot-hero]");
  var root = hero && hero.querySelector(".stage");
  if (!root || !window.OTRoom) return;
  var PARTS;
  try {
    PARTS = JSON.parse(root.dataset.systems || "[]");
  } catch (e) {
    PARTS = [];
  }
  if (!PARTS.length) return;
  hero.classList.add("is-js");

  var byId = {};
  PARTS.forEach(function (p) {
    byId[p.id] = p;
  });
  var canvas = root.querySelector(".stage__canvas");
  var svg = canvas.querySelector("svg");
  var labels = root.querySelector(".stage__labels");
  var detail = root.querySelector(".stage__detail");
  detail.classList.add("is-empty");
  var el = OTRoom.el;
  var reduce = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  var SLOT = {
    ceiling: ["l", 80],
    doors: ["l", 165],
    walls: ["l", 245],
    integration: ["l", 290, 190],
    scrub: ["l", 420, 150],
    control: ["r", 80],
    laminar: ["r", 170],
    lights: ["r", 265],
    gases: ["r", 370],
    floor: ["r", 455],
  };

  var room = OTRoom.draw(svg, { dims: false });
  var leads = el("g", { class: "leads" }, svg);
  var pinned = null,
    hover = null,
    timer = null;

  function wire(node) {
    var id = node.dataset.part || node.getAttribute("data-part");
    function on() {
      clearTimeout(timer);
      hover = id;
      apply();
    }
    function off() {
      clearTimeout(timer);
      timer = setTimeout(function () {
        hover = null;
        apply();
      }, 140);
    }
    node.addEventListener("mouseenter", on);
    node.addEventListener("mouseleave", off);
    node.addEventListener("focus", on);
    node.addEventListener("blur", off);
    node.addEventListener("click", function () {
      pinned = pinned === id ? null : id;
      apply();
    });
  }

  detail.addEventListener("mouseenter", function () {
    clearTimeout(timer);
  });
  detail.addEventListener("mouseleave", function () {
    clearTimeout(timer);
    timer = setTimeout(function () {
      hover = null;
      apply();
    }, 140);
  });

  PARTS.forEach(function (p) {
    var a = OTRoom.anchor(p.id),
      s = SLOT[p.id],
      left = s[0] === "l";
    var lx = s[2] || (left ? 262 : 938),
      bx = left ? lx + 40 : lx - 40,
      ly = s[1];
    var g = el(
      "g",
      {
        class: "lead-g",
        "data-part": p.id,
        tabindex: "-1",
        focusable: "false",
      },
      leads,
    );
    el(
      "path",
      {
        class: "lead",
        d: "M" + lx + "," + ly + " H" + bx + " L" + a[0] + "," + a[1],
      },
      g,
    );
    el("circle", { class: "dot", cx: a[0], cy: a[1], r: 5 }, g);
    el("circle", { class: "dot-hit", cx: a[0], cy: a[1], r: 24 }, g);
    var b = document.createElement("button");
    b.type = "button";
    b.className = "callout callout--" + (left ? "left" : "right");
    b.dataset.part = p.id;
    b.textContent = p.short || p.label;
    b.setAttribute("aria-pressed", "false");
    b.style.setProperty("--x", (lx / 1200) * 100 + "%");
    b.style.setProperty("--y", (ly / 640) * 100 + "%");
    labels.appendChild(b);
    wire(b);
    wire(g);
    (room.proxies[p.id] || []).forEach(wire);
  });

  function apply() {
    var id = hover || pinned;
    room.setActive(id);
    detail.classList.toggle("is-empty", !id);
    root.classList.toggle("has-detail", !!id);
    root.querySelectorAll("[data-part]").forEach(function (n) {
      if (n.closest(".room")) return;
      n.classList.toggle(
        "is-active",
        n.dataset ? n.dataset.part === id : n.getAttribute("data-part") === id,
      );
    });
    root.querySelectorAll("button[data-part]").forEach(function (b) {
      b.setAttribute("aria-pressed", String(b.dataset.part === pinned));
    });
    if (!id) return;
    var p = byId[id];
    detail.innerHTML =
      '<h3></h3><div class="copy"><p></p><span class="tag fig"></span></div><a class="btn btn--solid" href=""></a>';
    detail.querySelector("h3").textContent = p.label;
    detail.querySelector("p").textContent = p.title;
    detail.querySelector(".fig").textContent = p.summary;
    var link = detail.querySelector("a");
    link.href = p.href;
    link.textContent = root.dataset.more || "View More";
  }
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && pinned) {
      pinned = null;
      apply();
    }
  });

  function intro() {
    if (reduce) return;
    root.classList.add("is-intro");
    svg.classList.add("is-drawing");
    setTimeout(function () {
      root.classList.remove("is-intro");
      svg.classList.remove("is-drawing");
    }, 3200);
  }

  var mq = window.matchMedia("(max-width: 860px)");
  function fit() {
    svg.setAttribute("viewBox", mq.matches ? "160 10 780 600" : "0 0 1200 640");
  }
  fit();
  mq.addEventListener
    ? mq.addEventListener("change", fit)
    : mq.addListener(fit);

  function load3D() {
    var s = document.createElement("script");
    s.type = "module";
    s.src =
      "https://cdn.jsdelivr.net/npm/@google/model-viewer@3.5.0/dist/model-viewer.min.js";
    document.head.appendChild(s);
    var mv = document.createElement("model-viewer");
    mv.className = "ot-model";
    mv.setAttribute("src", root.dataset.model);
    mv.setAttribute("alt", "Interactive 3D view of an operating theatre");
    mv.setAttribute("camera-controls", "");
    mv.setAttribute("autoplay", "");
    mv.setAttribute("interaction-prompt", "none");
    mv.setAttribute("shadow-intensity", "0.5");
    mv.setAttribute("camera-orbit", root.dataset.orbit || "35deg 62deg auto");
    PARTS.forEach(function (p) {
      var a = OTRoom.anchors3d[p.id],
        b = document.createElement("button");
      b.slot = "hotspot-" + p.id;
      b.className = "hotspot";
      b.dataset.part = p.id;
      b.type = "button";

      b.dataset.position = a[0] - 3 + "m " + a[2] + "m " + (a[1] - 3) + "m";
      b.dataset.normal = "0m 1m 0m";
      b.textContent = p.short || p.label;
      wire(b);
      mv.appendChild(b);
    });
    mv.addEventListener("load", function () {
      canvas.classList.add("is-3d");
    });
    mv.addEventListener("error", function () {
      mv.remove();
      canvas.classList.remove("is-3d");
    });
    s.onerror = function () {
      mv.remove();
    };
    canvas.appendChild(mv);
  }
  if (root.dataset.model) load3D();
  else intro();

  window.OTStage = {
    select: function (id) {
      pinned = id;
      apply();
    },
  };
})();

(function () {
  "use strict";
  var wrap = document.querySelector("[data-ot-systems]");
  var fig = document.querySelector("[data-ot-room]");
  var svg = fig && fig.querySelector("svg");
  if (!wrap || !svg || !window.OTRoom) return;

  var room = OTRoom.draw(svg, { dims: false });
  var boxes = [].slice.call(wrap.querySelectorAll('input[type="checkbox"]'));
  var cap = fig.querySelector("figcaption");
  var text = {
    empty: fig.dataset.empty || (cap ? cap.textContent : ""),
    one: fig.dataset.one || "1 system selected.",
    many: fig.dataset.many || "{n} systems selected.",
  };

  function sync() {
    var ids = boxes
      .filter(function (b) {
        return b.checked;
      })
      .map(function (b) {
        return b.value;
      });
    room.setActiveSet(ids);
    if (cap)
      cap.textContent = !ids.length
        ? text.empty
        : ids.length === 1
          ? text.one
          : text.many.replace("{n}", ids.length);
  }
  boxes.forEach(function (b) {
    b.addEventListener("change", sync);
  });

  function fromHash() {
    var ids = decodeURIComponent((location.hash || "").slice(1)).split(",");
    boxes.forEach(function (b) {
      if (ids.indexOf(b.value) >= 0) b.checked = true;
    });
    sync();
  }
  fromHash();
  window.addEventListener("hashchange", fromHash);
  window.addEventListener("pageshow", sync);
  if (wrap.closest("form"))
    wrap.closest("form").addEventListener("reset", function () {
      setTimeout(sync, 0);
    });
})();


// Mobile Drawer //
document.addEventListener('DOMContentLoaded', () => {

    const headerDrawer = document.querySelector('.or-header-drawer');
    const openDrawer = document.querySelector('.or-mobile-toggle');
    const closeDrawer = document.querySelector('.or-close-toggle');

    if (headerDrawer && openDrawer) {

        openDrawer.addEventListener('click', () => {

            headerDrawer.classList.add('active');
            document.body.style.overflow = 'hidden';
            document.documentElement.style.overflow = 'hidden';

        });

    }

    if (headerDrawer && closeDrawer) {

        closeDrawer.addEventListener('click', () => {

            headerDrawer.classList.remove('active');
            document.body.style.overflow = '';
            document.documentElement.style.overflow = '';

        });

    }

});

// Sticky Header //
document.addEventListener('DOMContentLoaded', () => {

    const headerContainer = document.querySelector('.axis-header-or');
    const scrollThreshold = 900;

    window.addEventListener('scroll', function () {

        if (window.scrollY > scrollThreshold) {
            headerContainer.classList.add('is-sticky');
        } else {
            headerContainer.classList.remove('is-sticky');
        }

    });

});

// Features Scroll Bar //
document.addEventListener('DOMContentLoaded', () => {

    const cards = document.querySelectorAll('.feature-card');
    const navLinks = document.querySelectorAll('.features-link');
    const navContainer = document.querySelector('.features-list');

    if (!cards.length || !navLinks.length) return;

    const observerOptions = {
        root: null,
        rootMargin: '-30% 0px -65% 0px',
        threshold: 0
    };

    const observer = new IntersectionObserver((entries) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {
                const id = entry.target.getAttribute('id');
                setActiveLink(id);
            }

        });

    }, observerOptions);

    cards.forEach(card => observer.observe(card));

    function setActiveLink(id) {

        navLinks.forEach(link => {

            const isActive = link.getAttribute('data-target') === id;
            link.classList.toggle('active', isActive);

            if (isActive && window.innerWidth <= 900 && navContainer) {
                link.scrollIntoView({
                    behavior: 'smooth',
                    block: 'nearest',
                    inline: 'center'
                });
            }

        });

    }

    navLinks.forEach(link => {

        link.addEventListener('click', (e) => {

            e.preventDefault();
            const targetId = link.getAttribute('data-target');
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                targetElement.scrollIntoView({behavior: 'smooth'});
            }

        });

    });

});

// Ease Out Animations //
document.addEventListener('DOMContentLoaded', () => {

    // Strict Scroll for Links
    document.querySelectorAll('.sol-navlink').forEach(link => {

        link.addEventListener('click', (e) => {

            const targetId = link.getAttribute('href');
            if (!targetId || targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                e.preventDefault();
                targetElement.scrollIntoView({behavior: 'smooth'});
            }

        });

    });

    // Intersection Observer for Animations //
    const observerOptions = {
        root: null,
        rootMargin: '0px 0px -50px 0px',
        threshold: 0.05
    };

    const scrollObserver = new IntersectionObserver((entries, observer) => {

        entries.forEach(entry => {

            if (entry.isIntersecting) {

                const target = entry.target;
                target.classList.add('is-visible');

                const items = target.querySelectorAll('.material-item, .instal-item');
                items.forEach((item, index) => {
                    item.style.transitionDelay = `${index * 0.15}s`;
                    item.classList.add('is-visible');
                });

                observer.unobserve(target);

            }

        });

    }, observerOptions);

    document.querySelectorAll('section').forEach(el => scrollObserver.observe(el));
    document.querySelectorAll('article').forEach(el => scrollObserver.observe(el));
    
});

// Contact Input Dropdown //
document.addEventListener('DOMContentLoaded', () => {

    const inputContainer = document.querySelector('.input-container');
    if (!inputContainer) return;

    const inputDropdown = inputContainer.querySelector('.input-dropdown');
    const input = inputContainer.querySelector('input');
    const items = inputDropdown.querySelectorAll('li');

    input.addEventListener('click', () => {
        inputDropdown.classList.add('is-open');
    });

    document.addEventListener('click', (e) => {

        if (!inputContainer.contains(e.target)) {
            inputDropdown.classList.remove('is-open');
        }

    });

    items.forEach(item => {

        item.addEventListener('click', () => {

            input.value = item.textContent.trim();
            inputDropdown.classList.remove('is-open');

        });

    });

});

// OR Contact Form AJAX Submission //
document.addEventListener('DOMContentLoaded', () => {

    const orForm = document.getElementById('orContactForm');
    if (!orForm) return;

    orForm.addEventListener('submit', function (e) {

        e.preventDefault();
        const formData = new FormData(orForm);
        formData.append('action', 'submit_or_contact_form');

        const ajaxUrl = typeof demo_ajax_obj !== 'undefined' ? demo_ajax_obj.ajax_url : '/wp-admin/admin-ajax.php';

        fetch(ajaxUrl, {
            method: 'POST',
            body: formData
        }).then(res => res.json()).then(response => {

            if (response.success) {

                orForm.reset();
                orForm.style.display = 'none';

            } else {

                alert(response.data || 'Error submitting application! Please try again!');

            }

        }).catch(() => {

            alert('Network error!');

        });

    });

});