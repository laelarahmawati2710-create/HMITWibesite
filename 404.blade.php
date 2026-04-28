<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Halaman Tidak Ditemukan</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Exo+2:wght@300;400&display=swap');

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background: radial-gradient(ellipse at 50% 60%, #0d1545 0%, #060b2e 60%, #020718 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-family: 'Exo 2', sans-serif;
            overflow: hidden;
        }

        .stars { position: fixed; inset: 0; pointer-events: none; }
        .star {
            position: absolute;
            border-radius: 50%;
            animation: twinkle var(--d, 2s) ease-in-out infinite alternate;
        }
        @keyframes twinkle { from { opacity: .2; } to { opacity: 1; } }

        .planet {
            position: absolute;
            top: 12%; left: 10%;
            width: 80px; height: 80px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 35%, #5effd8, #4a7ebf 50%, #7b5ea7);
            box-shadow: 0 0 30px rgba(94,255,216,.4), 0 0 60px rgba(94,255,216,.15);
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }

        .scene {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 18px;
        }

        .rover-svg { animation: float 4s ease-in-out infinite; }

        .sign-num {
            font-family: 'Orbitron', monospace;
            fill: #00d4ff;
            filter: drop-shadow(0 0 8px #00d4ff);
            animation: flicker 4s step-end infinite;
        }
        @keyframes flicker {
            0%,94%,100% { opacity:1; } 95% { opacity:.3; } 97% { opacity:.8; } 99% { opacity:.2; }
        }

        .wheel-l { transform-origin: 95px 178px;  animation: spin 3s linear infinite; }
        .wheel-r { transform-origin: 225px 178px; animation: spin 3s linear infinite; }
        @keyframes spin { to { transform: rotate(360deg); } }

        .alien-face { animation: blink 5s ease-in-out infinite; transform-origin: 160px 120px; }
        @keyframes blink { 0%,88%,100% { transform:scaleY(1); } 93% { transform:scaleY(.8); } }

        .caption {
            font-size: 20px;
            font-weight: 300;
            color: rgba(200,220,255,.85);
            letter-spacing: .5px;
        }

        .btn {
            padding: 9px 28px;
            font-family: 'Orbitron', monospace;
            font-size: 11px;
            letter-spacing: 2px;
            color: #00d4ff;
            background: transparent;
            border: 1px solid rgba(0,212,255,.5);
            border-radius: 30px;
            text-decoration: none;
            transition: all .3s;
        }
        .btn:hover {
            background: rgba(0,212,255,.12);
            box-shadow: 0 0 18px rgba(0,212,255,.4);
        }
    </style>
</head>
<body>

<div class="stars" id="stars"></div>
<div class="planet"></div>

<div class="scene">
    <svg class="rover-svg" width="320" height="210" viewBox="0 0 320 210" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient id="bodyGrad" x1="0" y1="0" x2="0" y2="1">
                <stop offset="0%" stop-color="#5ab0d0"/><stop offset="100%" stop-color="#2a6080"/>
            </linearGradient>
            <radialGradient id="alienGrad" cx="40%" cy="35%">
                <stop offset="0%" stop-color="#7effa0"/><stop offset="100%" stop-color="#1e8040"/>
            </radialGradient>
            <radialGradient id="wheelGrad" cx="40%" cy="35%">
                <stop offset="0%" stop-color="#ff8030"/><stop offset="100%" stop-color="#801800"/>
            </radialGradient>
            <filter id="glow"><feGaussianBlur stdDeviation="3" result="b"/><feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge></filter>
        </defs>

        <!-- Ground -->
        <ellipse cx="160" cy="195" rx="145" ry="16" fill="#0d0840" opacity=".9"/>

        <!-- Crystals -->
        <polygon points="30,195 38,165 46,195"  fill="#9060d0"/>
        <polygon points="44,195 54,150 64,195"  fill="#b070e0"/>
        <polygon points="70,195 76,172 82,195"  fill="#20b0b0" opacity=".8"/>
        <polygon points="238,195 244,170 250,195" fill="#20b0b0" opacity=".8"/>
        <polygon points="256,195 266,152 276,195" fill="#9060d0"/>
        <polygon points="270,195 280,162 290,195" fill="#7b5ea7"/>

        <!-- Rover body -->
        <rect x="80" y="140" width="160" height="50" rx="10" fill="url(#bodyGrad)"/>
        <rect x="95" y="153" width="30" height="8" rx="2" fill="#1a3a50"/>
        <circle cx="102" cy="157" r="3" fill="#e05040"/>
        <circle cx="112" cy="157" r="3" fill="#50c060"/>
        <circle cx="122" cy="157" r="3" fill="#e0c040"/>
        <path d="M240 158 Q265 155 268 148" stroke="#f0a020" stroke-width="2.5" fill="none"/>

        <!-- Dome -->
        <ellipse cx="160" cy="142" rx="52" ry="10" fill="#3a85a8"/>
        <path d="M108 142 Q108 88 160 88 Q212 88 212 142 Z" fill="rgba(100,200,255,0.18)" stroke="rgba(100,200,255,0.5)" stroke-width="1.5"/>

        <!-- Alien -->
        <g class="alien-face">
            <ellipse cx="160" cy="120" rx="26" ry="28" fill="url(#alienGrad)"/>
            <line x1="160" y1="92" x2="160" y2="78" stroke="#3ec76a" stroke-width="2"/>
            <circle cx="160" cy="75" r="4" fill="#a0ffb0" filter="url(#glow)"/>
            <circle cx="150" cy="116" r="5" fill="#1a0030"/>
            <circle cx="170" cy="116" r="5" fill="#1a0030"/>
            <circle cx="152" cy="114" r="1.5" fill="white"/>
            <circle cx="172" cy="114" r="1.5" fill="white"/>
            <path d="M153 128 Q160 134 167 128" stroke="#1a0030" stroke-width="2" fill="none" stroke-linecap="round"/>
            <ellipse cx="144" cy="126" rx="4" ry="2.5" fill="rgba(255,100,150,.35)"/>
            <ellipse cx="176" cy="126" rx="4" ry="2.5" fill="rgba(255,100,150,.35)"/>
        </g>

        <!-- Wheels -->
        <g class="wheel-l">
            <circle cx="95"  cy="178" r="20" fill="#222" stroke="#888" stroke-width="3"/>
            <circle cx="95"  cy="178" r="11" fill="url(#wheelGrad)"/>
        </g>
        <g class="wheel-r">
            <circle cx="225" cy="178" r="20" fill="#222" stroke="#888" stroke-width="3"/>
            <circle cx="225" cy="178" r="11" fill="url(#wheelGrad)"/>
        </g>

        <!-- 404 Sign -->
        <rect x="262" y="120" width="50" height="34" rx="5" fill="rgba(0,10,40,.85)" stroke="rgba(0,200,255,.8)" stroke-width="1.5"/>
        <path d="M266 124 h5 M266 124 v5 M308 124 h-5 M308 124 v5 M266 150 h5 M266 150 v-5 M308 150 h-5 M308 150 v-5" stroke="#00d4ff" stroke-width="1.5" fill="none"/>
        <text class="sign-num" x="287" y="143" text-anchor="middle" font-size="16">404..</text>
        <rect x="285" y="154" width="4" height="22" rx="2" fill="#2a6080"/>
    </svg>

    <p class="caption">Oops... page not found</p>
    <a href="{{ url('/') }}" class="btn">KEMBALI KE BERANDA</a>
</div>

<script>
    const colors = ['#ffffdd','#80ffee','#ffdd80','#ffffff','#c0c0ff'];
    const s = document.getElementById('stars');
    for (let i = 0; i < 90; i++) {
        const el = document.createElement('div');
        el.className = 'star';
        const sz = Math.random() * 3 + 1, c = colors[i % colors.length];
        Object.assign(el.style, {
            width: sz+'px', height: sz+'px',
            left: (Math.random()*100)+'%', top: (Math.random()*100)+'%',
            background: c, '--d': (Math.random()*3+1).toFixed(1)+'s',
            animationDelay: (Math.random()*4).toFixed(1)+'s',
            boxShadow: `0 0 ${sz*2}px ${c}`
        });
        s.appendChild(el);
    }
</script>
</body>
</html>