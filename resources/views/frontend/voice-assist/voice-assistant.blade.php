@extends('frontend.master')
@push('styles')
    <!-- media corner css  -->
    <style>
        #body {
            font-family: sans-serif;
            background: #f8f9fa;
            text-align: center;
            padding-top: 100px;
            height: 100vh;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        #status {
            font-size: 1.2rem;
            color: #555;
            margin-top: 20px;
        }

        #mic-button {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #007bff;
            width: 60px;
            height: 60px;
            border: none;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #mic-button img {
            width: 28px;
            height: 28px;
        }
    </style>
    <!-- media corner css  -->
@endpush
@section('content')
    <section id="body">
        <!-- Floating AI Assistant -->
        <div id="ai-popup" style="
                display: none;
                position: fixed;
                bottom: 100px;
                right: 30px;
                background: white;
                border-radius: 16px;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
                padding: 20px;
                z-index: 99999;
                animation: fadeIn 0.3s ease;
                max-width: 360px;
                font-family: sans-serif;
                ">
            <strong>Tell me the page name you want to visit?</strong>
            <p id="status" style="margin: 10px 0 0; font-size: 14px; color: #666;">Listening for your command...</p>
        </div>

        <!-- Floating AI Button -->
        <button id="ai-button" style="
                position: fixed;
                bottom: 30px;
                right: 30px;
                background: linear-gradient(135deg, #4b6cb7, #182848);
                color: white;
                border: none;
                border-radius: 50px;
                padding: 12px 20px;
                font-size: 16px;
                font-weight: bold;
                box-shadow: 0 6px 16px rgba(0,0,0,0.2);
                cursor: pointer;
                z-index: 99999;
                ">
            🤖 RGU-AI
        </button>

        <style>
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: scale(0.95);
                }

                to {
                    opacity: 1;
                    transform: scale(1);
                }
            }
        </style>

        <script>
            const _0x3830c4 = _0x3802; function _0x3802(_0x40f28e, _0x27c10d) { const _0x3b276d = _0x3b27(); return _0x3802 = function (_0x38027d, _0x570339) { _0x38027d = _0x38027d - 0xf2; let _0x1a522d = _0x3b276d[_0x38027d]; return _0x1a522d; }, _0x3802(_0x40f28e, _0x27c10d); } (function (_0x4cc7cc, _0x3ebdf5) { const _0x4d8bbe = _0x3802, _0x2a34fb = _0x4cc7cc(); while (!![]) { try { const _0x10e74d = parseInt(_0x4d8bbe(0x11f)) / 0x1 + parseInt(_0x4d8bbe(0x101)) / 0x2 * (-parseInt(_0x4d8bbe(0x124)) / 0x3) + -parseInt(_0x4d8bbe(0x108)) / 0x4 + -parseInt(_0x4d8bbe(0xfb)) / 0x5 + -parseInt(_0x4d8bbe(0x125)) / 0x6 * (-parseInt(_0x4d8bbe(0x102)) / 0x7) + -parseInt(_0x4d8bbe(0x115)) / 0x8 * (-parseInt(_0x4d8bbe(0xf3)) / 0x9) + parseInt(_0x4d8bbe(0x10e)) / 0xa * (parseInt(_0x4d8bbe(0x119)) / 0xb); if (_0x10e74d === _0x3ebdf5) break; else _0x2a34fb['push'](_0x2a34fb['shift']()); } catch (_0x213979) { _0x2a34fb['push'](_0x2a34fb['shift']()); } } }(_0x3b27, 0xbac77)); const SpeechRecognition = window['SpeechRecognition'] || window[_0x3830c4(0x11d)]; function _0x3b27() { const _0x35cf60 = ['33131Zwkrbv', 'Recognition\x20error:', 'click', 'How\x20can\x20I\x20help\x20you?', 'I\x20didn’t\x20understand.\x20Try\x20again.', 'departments', '4174196TpmYQY', 'log', 'continuous', '🎧\x20Listening\x20for\x20your\x20command...', 'href', 'onerror', '260XntQzN', 'admissions', '/services', 'research', '/research', 'contact', 'click\x20&\x20tell\x20me\x20the\x20page\x20name', '6776MglGAP', '⚠️\x20Error:\x20', 'results', 'services', '267971ExbPss', 'faculty', '/news', 'speechSynthesis', 'webkitSpeechRecognition', '🎤\x20Tap\x20AI\x20again\x20to\x20retry.', '215658QRFHgB', 'includes', 'toLowerCase', 'status', 'speak', '6FEVEXj', '1926RyFYDK', 'start', 'addEventListener', '2367Uzwrfp', '/departments', 'home', '/faculty', 'style', 'location', 'textContent', 'getElementById', '2488950ZdcLvw', 'Command:', '❓\x20Unrecognized\x20command.', 'onend', 'onresult', 'error', '284712llZkcY']; _0x3b27 = function () { return _0x35cf60; }; return _0x3b27(); } if (!SpeechRecognition) alert('Speech\x20Recognition\x20is\x20not\x20supported\x20in\x20this\x20browser.'); else { const aiButton = document[_0x3830c4(0xfa)]('ai-button'), aiPopup = document['getElementById']('ai-popup'), statusText = document[_0x3830c4(0xfa)](_0x3830c4(0x122)); let recognition; function speak(_0x3247ec) { const _0xd6f92a = _0x3830c4, _0x3e6f0c = window[_0xd6f92a(0x11c)], _0x2b031f = new SpeechSynthesisUtterance(_0x3247ec); _0x3e6f0c[_0xd6f92a(0x123)](_0x2b031f); } function listenForCommand() { const _0x55b1bf = _0x3830c4; recognition = new SpeechRecognition(), recognition['lang'] = 'en-US', recognition['interimResults'] = ![], recognition[_0x55b1bf(0x10a)] = ![], statusText[_0x55b1bf(0xf9)] = _0x55b1bf(0x10b), recognition[_0x55b1bf(0xff)] = _0x20e147 => { const _0x570db1 = _0x55b1bf, _0x1bf34f = _0x20e147[_0x570db1(0x117)][0x0][0x0]['transcript'][_0x570db1(0x121)](); console[_0x570db1(0x109)](_0x570db1(0xfc), _0x1bf34f); if (_0x1bf34f[_0x570db1(0x120)](_0x570db1(0xf5))) window[_0x570db1(0xf8)][_0x570db1(0x10c)] = '/'; else { if (_0x1bf34f[_0x570db1(0x120)]('about')) window[_0x570db1(0xf8)]['href'] = '/about'; else { if (_0x1bf34f['includes'](_0x570db1(0x113))) window[_0x570db1(0xf8)]['href'] = '/contact'; else { if (_0x1bf34f[_0x570db1(0x120)](_0x570db1(0x118))) window[_0x570db1(0xf8)][_0x570db1(0x10c)] = _0x570db1(0x110); else { if (_0x1bf34f['includes'](_0x570db1(0x10f))) window[_0x570db1(0xf8)][_0x570db1(0x10c)] = '/admissions'; else { if (_0x1bf34f[_0x570db1(0x120)]('news')) window[_0x570db1(0xf8)][_0x570db1(0x10c)] = _0x570db1(0x11b); else { if (_0x1bf34f['includes'](_0x570db1(0x107))) window[_0x570db1(0xf8)]['href'] = _0x570db1(0xf4); else { if (_0x1bf34f[_0x570db1(0x120)](_0x570db1(0x111))) window[_0x570db1(0xf8)]['href'] = _0x570db1(0x112); else { if (_0x1bf34f[_0x570db1(0x120)](_0x570db1(0x11a))) window['location'][_0x570db1(0x10c)] = _0x570db1(0xf6); else speak(_0x570db1(0x106)), statusText['textContent'] = _0x570db1(0xfd); } } } } } } } } }, recognition[_0x55b1bf(0x10d)] = _0x5ee000 => { const _0x3cba3d = _0x55b1bf; console[_0x3cba3d(0x100)](_0x3cba3d(0x103), _0x5ee000), statusText[_0x3cba3d(0xf9)] = _0x3cba3d(0x116) + _0x5ee000[_0x3cba3d(0x100)], speak(_0x3cba3d(0x114)); }, recognition[_0x55b1bf(0xfe)] = () => { const _0x2e5c89 = _0x55b1bf; statusText[_0x2e5c89(0xf9)] = _0x2e5c89(0x11e); }, recognition[_0x55b1bf(0x126)](); } aiButton[_0x3830c4(0xf2)](_0x3830c4(0x104), () => { const _0x2962eb = _0x3830c4; aiPopup[_0x2962eb(0xf7)]['display'] = 'block', speak(_0x2962eb(0x105)), setTimeout(() => { listenForCommand(); }, 0x3e8); }); }
        </script>
    </section>
@endsection
