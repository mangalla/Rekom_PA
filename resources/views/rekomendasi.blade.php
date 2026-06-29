<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rekomendasi Peminatan PA &mdash; Teknik Informatika</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#1B1B3A;
    --ink-soft:#2B2B55;
    --coral:#FF6B5E;
    --coral-dim:#FFE3DF;
    --mint:#2FBE86;
    --mint-dim:#DEF7EC;
    --amber:#F4B942;
    --paper:#F7F5FB;
    --paper-card:#FFFFFF;
    --slate:#5B5B7A;
    --slate-soft:#8B8BA7;
    --line:#E6E3F1;
    --r-lg:20px;
    --r-md:14px;
    --r-sm:10px;
    --shadow-sm: 0 2px 10px rgba(27,27,58,0.06);
    --shadow-md: 0 12px 32px rgba(27,27,58,0.10);
    --shadow-lg: 0 24px 60px rgba(27,27,58,0.14);
  }

  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    margin:0;
    font-family:'Inter',system-ui,sans-serif;
    background:var(--paper);
    color:var(--ink);
    -webkit-font-smoothing:antialiased;
  }
  .font-display{font-family:'Space Grotesk',sans-serif;}
  .font-mono{font-family:'JetBrains Mono',monospace;}

  /* Subtle dotted texture in background, evokes "data points" */
  body{
    background-image: radial-gradient(circle, rgba(27,27,58,0.05) 1px, transparent 1px);
    background-size: 22px 22px;
  }

  .shell{
    max-width:1080px;
    margin:0 auto;
    padding: 28px 24px 80px;
  }

  /* ---------- Top bar ---------- */
  .topbar{
    display:flex;
    align-items:center;
    justify-content:space-between;
    margin-bottom:28px;
  }
  .brand{
    display:flex;
    align-items:center;
    gap:12px;
  }
  .brand-mark{
    width:40px;height:40px;border-radius:12px;
    background:linear-gradient(135deg, var(--coral), var(--amber));
    display:flex;align-items:center;justify-content:center;
    flex-shrink:0;
    box-shadow: var(--shadow-sm);
  }
  .brand-mark svg{width:22px;height:22px;}
  .brand-text{line-height:1.2;}
  .brand-text strong{display:block;font-family:'Space Grotesk',sans-serif;font-size:15px;font-weight:700;}
  .brand-text span{font-size:12px;color:var(--slate);}
  .badge-pill{
    font-size:12px;font-weight:600;color:var(--ink-soft);
    background:#fff;border:1px solid var(--line);
    padding:6px 14px;border-radius:99px;
    box-shadow:var(--shadow-sm);
  }

  /* ---------- Hero ---------- */
  .hero{
    background: linear-gradient(135deg, var(--ink) 0%, #2D2D63 100%);
    border-radius: 28px;
    padding: 44px 40px;
    color:#fff;
    position:relative;
    overflow:hidden;
    margin-bottom: 28px;
    box-shadow: var(--shadow-lg);
  }
  .hero::before{
    content:"";
    position:absolute; right:-60px; top:-60px;
    width:260px; height:260px; border-radius:50%;
    background: radial-gradient(circle, rgba(255,107,94,0.35), transparent 70%);
  }
  .hero::after{
    content:"";
    position:absolute; left:-40px; bottom:-80px;
    width:220px; height:220px; border-radius:50%;
    background: radial-gradient(circle, rgba(47,190,134,0.25), transparent 70%);
  }
  .hero-kicker{
    position:relative; z-index:1;
    display:inline-flex; align-items:center; gap:8px;
    font-size:12.5px; font-weight:600; letter-spacing:0.06em; text-transform:uppercase;
    color:var(--coral); margin-bottom:14px;
  }
  .hero-kicker .dot{width:7px;height:7px;border-radius:50%;background:var(--coral);box-shadow:0 0 0 4px rgba(255,107,94,0.25);}
  .hero h1{
    position:relative; z-index:1;
    font-family:'Space Grotesk',sans-serif;
    font-size: 34px; line-height:1.18; font-weight:700;
    margin:0 0 12px;
    max-width: 640px;
  }
  .hero p{
    position:relative; z-index:1;
    font-size:15px; color:#C9C7E8; max-width:560px; line-height:1.6; margin:0;
  }
  .hero-stats{
    position:relative; z-index:1;
    margin-top:26px;
  }
  .hero-stats::after{ content:""; display:table; clear:both; }
  .hero-stat{ float:left; margin-right:40px; }
  .hero-stat strong{font-family:'Space Grotesk',sans-serif; font-size:22px; line-height:1.3;}
  .hero-stat .stat-label{font-size:12px; color:#A7A4D1;}

  /* ---------- Picker card ---------- */
  .picker-card{
    background:var(--paper-card);
    border-radius: var(--r-lg);
    padding: 28px 32px;
    box-shadow: var(--shadow-md);
    border:1px solid var(--line);
    margin-bottom: 32px;
  }
  .picker-label{
    font-size:13px; font-weight:600; color:var(--slate); margin-bottom:10px; display:block;
  }
  .picker-row{
    display:flex; gap:14px; flex-wrap:wrap;
  }
  .select-wrap{
    position:relative; flex:1; min-width:260px;
  }
  .select-wrap svg.chev{
    position:absolute; right:16px; top:50%; transform:translateY(-50%);
    width:16px; height:16px; pointer-events:none; color:var(--slate-soft);
  }
  select{
    width:100%;
    appearance:none;
    padding: 14px 42px 14px 16px;
    border-radius: var(--r-md);
    border:1.5px solid var(--line);
    background: var(--paper);
    color: var(--ink);
    font-size: 14.5px;
    font-family:'Inter',sans-serif;
    font-weight:500;
    cursor:pointer;
    transition: border-color .15s ease, box-shadow .15s ease;
  }
  select:hover{border-color: var(--coral);}
  select:focus{outline:none; border-color:var(--coral); box-shadow:0 0 0 4px var(--coral-dim);}

  button.cta{
    background: var(--ink);
    color:#fff;
    border:none;
    padding: 14px 26px;
    border-radius: var(--r-md);
    font-size:14.5px;
    font-weight:600;
    font-family:'Inter',sans-serif;
    cursor:pointer;
    display:inline-flex; align-items:center; gap:8px;
    transition: transform .15s ease, background .15s ease, box-shadow .15s ease;
    box-shadow: var(--shadow-sm);
  }
  button.cta:hover{ background: var(--coral); transform: translateY(-1px); box-shadow:var(--shadow-md); }
  button.cta:active{ transform: translateY(0); }
  button.cta svg{width:16px;height:16px;}

  .picker-hint{
    margin-top:14px; font-size:12.5px; color:var(--slate-soft); display:flex; align-items:center; gap:6px;
  }

  /* ---------- Empty state ---------- */
  .empty-state{
    text-align:center; padding: 70px 20px;
    color:var(--slate);
  }
  .empty-state .icon-wrap{
    width:64px; height:64px; border-radius:18px; margin:0 auto 18px;
    background:var(--coral-dim); display:flex; align-items:center; justify-content:center;
  }
  .empty-state .icon-wrap svg{width:30px;height:30px;color:var(--coral);}
  .empty-state h3{font-family:'Space Grotesk',sans-serif; color:var(--ink); margin:0 0 8px; font-size:18px;}
  .empty-state p{margin:0; font-size:14px; max-width:380px; margin-inline:auto; line-height:1.6;}

  /* ---------- Section header ---------- */
  .section-head{
    display:flex; align-items:baseline; gap:12px; margin: 44px 0 18px;
  }
  .section-num{
    font-family:'JetBrains Mono',monospace; font-size:13px; font-weight:600;
    color:var(--coral); background:var(--coral-dim); padding:3px 9px; border-radius:7px;
  }
  .section-head h2{
    font-family:'Space Grotesk',sans-serif; font-size:21px; margin:0; font-weight:700;
  }
  .section-head .sub{font-size:13px; color:var(--slate-soft); margin-left:auto;}

  /* ---------- Result hero strip ---------- */
  .result-strip{
    display:flex; align-items:center; gap:20px;
    background: linear-gradient(120deg, var(--ink), #2D2D63);
    color:#fff; border-radius: var(--r-lg); padding: 26px 30px;
    box-shadow: var(--shadow-lg); margin-bottom:8px; flex-wrap:wrap;
  }
  .result-strip .avatar{
    width:54px;height:54px;border-radius:16px;
    background: var(--coral); display:flex;align-items:center;justify-content:center;
    font-family:'Space Grotesk',sans-serif; font-weight:700; font-size:19px; flex-shrink:0;
  }
  .result-strip .who{flex:1; min-width:200px;}
  .result-strip .who .name{font-family:'Space Grotesk',sans-serif; font-size:19px; font-weight:700;}
  .result-strip .who .nim{font-size:12.5px; color:#A7A4D1; font-family:'JetBrains Mono',monospace;}
  .result-strip .verdict{
    text-align:right;
  }
  .result-strip .verdict .label{font-size:11px; text-transform:uppercase; letter-spacing:.06em; color:#A7A4D1;}
  .result-strip .verdict .value{font-family:'Space Grotesk',sans-serif; font-size:21px; font-weight:700; color:var(--mint);}

  /* ---------- Score cards ---------- */
  .score-grid{
    display:flex; flex-wrap:wrap; gap:16px; margin: 24px 0 8px;
  }
  .score-grid .score-card{ flex:1 1 220px; }
  @supports (display:grid){
    .score-grid{ display:grid; grid-template-columns: repeat(3, 1fr); }
    .score-grid .score-card{ flex:initial; }
  }
  .score-card{
    background:var(--paper-card); border-radius:var(--r-md); padding:20px 20px 22px;
    border:1.5px solid var(--line); position:relative; overflow:hidden;
    transition: border-color .2s ease;
  }
  .score-card.winner{ border-color: var(--mint); background: var(--mint-dim); }
  .score-card .crown{
    position:absolute; top:14px; right:14px; width:22px;height:22px; color:var(--mint);
  }
  .score-card .label{font-size:12.5px; font-weight:600; color:var(--slate); margin-bottom:4px; display:flex; align-items:center; gap:7px;}
  .score-card .icon-dot{width:9px;height:9px;border-radius:3px;}
  .score-card .value{
    font-family:'Space Grotesk',sans-serif; font-size:30px; font-weight:700; color:var(--ink); margin:4px 0 12px;
  }
  .score-card .bar-track{
    height:8px; background:#EDEBF6; border-radius:99px; overflow:hidden;
  }
  .score-card .bar-fill{
    height:100%; border-radius:99px;
    transition: width 1.1s cubic-bezier(.16,1,.3,1);
    width:0%;
  }

  /* ---------- Reason card ---------- */
  .reason-card{
    background:#fff; border:1.5px solid var(--line); border-radius:var(--r-md);
    padding:20px 22px; margin-top:18px; font-size:14px; line-height:1.65; color:var(--ink-soft);
    display:flex; gap:14px; align-items:flex-start;
  }
  .reason-card .icon-wrap{
    width:34px;height:34px; border-radius:10px; background:var(--coral-dim); color:var(--coral);
    display:flex; align-items:center; justify-content:center; flex-shrink:0;
  }
  .reason-card .icon-wrap svg{width:17px;height:17px;}
  .reason-card b{color:var(--ink);}

  /* ---------- Decision tree diagram ---------- */
  .tree-wrap{
    background:#fff; border:1.5px solid var(--line); border-radius:var(--r-lg);
    padding: 26px 18px; overflow-x:auto;
  }
  .tree-caption{
    font-size:12.5px; color:var(--slate-soft); margin-top:14px; text-align:center;
  }
  .tree-node rect{ transition: fill .25s ease, stroke .25s ease; }
  .tree-node text{ font-family:'Inter',sans-serif; }
  .tree-edge path{ transition: stroke .25s ease, stroke-width .25s ease; }
  .tree-edge-label{ font-family:'JetBrains Mono',monospace; }

  /* ---------- Combinatorics ---------- */
  .combo-explain{
    background:#fff; border:1.5px solid var(--line); border-radius:var(--r-lg);
    padding: 26px 28px; margin-bottom:20px;
  }
  .combo-formula{
    font-family:'JetBrains Mono',monospace; font-size:15px; font-weight:600;
    background: var(--ink); color:#fff; padding:14px 18px; border-radius:var(--r-sm);
    display:inline-block; margin: 14px 0 0;
  }
  .combo-formula .result{color:var(--amber);}

  .candidate-grid{
    display:flex; flex-wrap:wrap; gap:10px; margin-top:18px;
  }
  .candidate-chip{ flex:1 1 110px; }
  @supports (display:grid){
    .candidate-grid{ display:grid; grid-template-columns: repeat(auto-fill, minmax(120px,1fr)); }
    .candidate-chip{ flex:initial; }
  }
  .candidate-chip{
    background: var(--paper); border:1.5px solid var(--line); border-radius:var(--r-sm);
    padding:12px 10px; text-align:center; font-size:13.5px; font-weight:600; color:var(--ink-soft);
  }

  .combo-list-head{
    display:flex; align-items:center; justify-content:space-between; margin-bottom:14px; flex-wrap:wrap; gap:10px;
  }
  .combo-list-head .count{
    font-size:12.5px; color:var(--slate); background:var(--paper); padding:5px 12px; border-radius:99px; border:1px solid var(--line);
  }
  .combo-grid{
    display:flex; flex-wrap:wrap; gap:12px;
  }
  .combo-grid .combo-card{ flex:1 1 230px; }
  @supports (display:grid){
    .combo-grid{ display:grid; grid-template-columns: repeat(auto-fill, minmax(230px,1fr)); }
    .combo-grid .combo-card{ flex:initial; }
  }
  .combo-card{
    background:#fff; border:1.5px solid var(--line); border-radius:var(--r-md);
    padding:14px 16px; font-size:13px; transition: border-color .15s ease, transform .15s ease;
  }
  .combo-card:hover{ border-color:var(--coral); transform:translateY(-2px); }
  .combo-card .idx{
    font-family:'JetBrains Mono',monospace; font-size:11px; color:var(--slate-soft); margin-bottom:6px; display:block;
  }
  .combo-card .members{display:flex; flex-wrap:wrap; gap:6px;}
  .combo-card .chip{
    background:var(--paper); padding:3px 9px; border-radius:7px; font-size:12px; font-weight:500; color:var(--ink-soft);
  }
  .combo-card .chip.self{ background: var(--coral); color:#fff; }

  footer.page-footer{
    text-align:center; margin-top:56px; font-size:12px; color:var(--slate-soft);
  }

  @media (max-width: 760px){
    .shell{padding:18px 14px 60px;}
    .hero{padding:32px 24px;}
    .hero h1{font-size:26px;}
    .score-grid{grid-template-columns:1fr;}
    .result-strip{flex-direction:column; align-items:flex-start;}
    .result-strip .verdict{text-align:left;}
    .picker-row{flex-direction:column;}
    button.cta{justify-content:center;}
  }

  @media (prefers-reduced-motion: reduce){
    .score-card .bar-fill{ transition:none; }
  }
</style>
</head>
<body>

<div class="shell">

  <div class="topbar">
    <div class="brand">
      <div class="brand-mark">
        <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg>
      </div>
      <div class="brand-text">
        <strong>Rekomendasi PA</strong>
        <span>Teknik Informatika &middot; Politeknik Caltex Riau</span>
      </div>
    </div>
    <span class="badge-pill">Semester 1&ndash;4 &middot; Data Akademik Riil</span>
  </div>

  <div class="hero">
    <div class="hero-kicker"><span class="dot"></span> Sistem Pendukung Keputusan</div>
    <h1 class="font-display">Bingung pilih rumpun PA? Lihat dulu apa kata nilaimu.</h1>
    <p>Sistem ini membaca rekam nilai akademikmu dari Semester 1 sampai 4, lalu menunjukkan rumpun Proyek Akhir yang paling cocok &mdash; lengkap dengan alasannya dan rekomendasi teman kelompok bimbingan.</p>
    <div class="hero-stats">
      <div class="hero-stat"><strong>3</strong><br><span class="stat-label">Rumpun PA</span></div>
      <div class="hero-stat"><strong>21</strong><br><span class="stat-label">Komponen Nilai</span></div>
      <div class="hero-stat"><strong>{{ $daftarMahasiswa->count() }}</strong><br><span class="stat-label">Mahasiswa Tercatat</span></div>
    </div>
  </div>

  <form action="{{ url('/') }}" method="GET">
    <div class="picker-card">
      <label class="picker-label" for="mahasiswa_id">Pilih namamu dari daftar mahasiswa</label>
      <div class="picker-row">
        <div class="select-wrap">
          <select name="mahasiswa_id" id="mahasiswa_id">
            <option value="">&mdash; Cari Nama atau NIM &mdash;</option>
            @foreach($daftarMahasiswa as $mhs)
              <option value="{{ $mhs->id }}" {{ request('mahasiswa_id') == $mhs->id ? 'selected' : '' }}>
                {{ $mhs->nim }} &middot; {{ $mhs->nama }}
              </option>
            @endforeach
          </select>
          <svg class="chev" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </div>
        <button type="submit" class="cta">
          Lihat Rekomendasiku
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </button>
      </div>
      <div class="picker-hint">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
        Skor dihitung otomatis dari nilai mata kuliah Semester 1&ndash;4 setiap kali kamu memilih nama.
      </div>
    </div>
  </form>

  @if($mahasiswaTerpilih && $analisis)
    @php
      $skorMap = [
        'Software' => ['val' => $analisis['skor']['Software'], 'color' => '#FF6B5E', 'key' => 'software'],
        'Jaringan' => ['val' => $analisis['skor']['Jaringan'], 'color' => '#F4B942', 'key' => 'jaringan'],
        'Multimedia' => ['val' => $analisis['skor']['Multimedia'], 'color' => '#7C6FF0', 'key' => 'multimedia'],
      ];
      $maxScore = max(array_column($skorMap, 'val'));
      $initials = collect(explode(' ', $mahasiswaTerpilih->nama))->map(fn($w) => mb_substr($w, 0, 1))->take(2)->implode('');
    @endphp

    <!-- ============ RESULT HERO ============ -->
    <div class="result-strip">
      <div class="avatar">{{ strtoupper($initials) }}</div>
      <div class="who">
        <div class="name font-display">{{ $mahasiswaTerpilih->nama }}</div>
        <div class="nim">NIM {{ $mahasiswaTerpilih->nim }}</div>
      </div>
      <div class="verdict">
        <div class="label">Rumpun Paling Cocok</div>
        <div class="value font-display">{{ $analisis['rekomendasi'] }}</div>
      </div>
    </div>

    <!-- ============ 1. SKOR ============ -->
    <div class="section-head">
      <span class="section-num">01</span>
      <h2 class="font-display">Skor Tiga Rumpun PA</h2>
      <span class="sub">dari relasi data <code class="font-mono">pa_scores</code></span>
    </div>

    <div class="score-grid">
      @foreach($skorMap as $label => $d)
        @php $isWinner = ($d['val'] == $maxScore); $pct = min(100, round(($d['val']/100)*100)); @endphp
        <div class="score-card {{ $isWinner ? 'winner' : '' }}">
          @if($isWinner)
            <svg class="crown" viewBox="0 0 24 24" fill="currentColor"><path d="M5 16L3 6l5.5 4L12 4l3.5 6L21 6l-2 10H5zm0 2h14v2H5v-2z"/></svg>
          @endif
          <div class="label"><span class="icon-dot" style="background:{{ $d['color'] }}"></span>{{ $label }}</div>
          <div class="value font-mono">{{ $d['val'] }}</div>
          <div class="bar-track">
            <div class="bar-fill" data-pct="{{ $pct }}" style="background:{{ $d['color'] }}"></div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="reason-card">
      <div class="icon-wrap">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M12 2a7 7 0 0 0-4 12.7V17h8v-2.3A7 7 0 0 0 12 2z"/></svg>
      </div>
      <div>
        <b>Kenapa {{ $analisis['rekomendasi'] }}?</b> {{ $analisis['alasan'] }} Skor kesiapan akhir kamu di rumpun ini adalah
        <b class="font-mono">{{ $analisis['skor_final'] }}</b> &mdash; tertinggi dari ketiga rumpun yang dibandingkan.
      </div>
    </div>

    <!-- ============ 2. POHON KEPUTUSAN ============ -->
    <div class="section-head">
      <span class="section-num">02</span>
      <h2 class="font-display">Bagaimana Sistem Memutuskan</h2>
      <span class="sub">jalur yang dipilih ditandai warna terang</span>
    </div>

    <div class="tree-wrap">
      <svg id="decisionTree" viewBox="0 0 800 380" width="100%" style="max-width:800px; display:block; margin:0 auto;">
        <!-- edges drawn first so nodes sit on top -->
        <g class="tree-edge" id="edge-root-d1">
          <path d="M 400 60 L 400 110" stroke="#D8D5E8" stroke-width="2.5" fill="none"/>
        </g>
        <g class="tree-edge" id="edge-d1-leafSoftware">
          <path d="M 340 150 L 175 220" stroke="#D8D5E8" stroke-width="2.5" fill="none"/>
        </g>
        <g class="tree-edge" id="edge-d1-d2">
          <path d="M 460 150 L 580 220" stroke="#D8D5E8" stroke-width="2.5" fill="none"/>
        </g>
        <g class="tree-edge" id="edge-d2-leafJaringan">
          <path d="M 545 270 L 470 320" stroke="#D8D5E8" stroke-width="2.5" fill="none"/>
        </g>
        <g class="tree-edge" id="edge-d2-leafMultimedia">
          <path d="M 615 270 L 690 320" stroke="#D8D5E8" stroke-width="2.5" fill="none"/>
        </g>

        <text x="250" y="190" class="tree-edge-label" font-size="11" fill="#8B8BA7">YA</text>
        <text x="525" y="190" class="tree-edge-label" font-size="11" fill="#8B8BA7">TIDAK</text>
        <text x="475" y="300" class="tree-edge-label" font-size="11" fill="#8B8BA7">YA</text>
        <text x="635" y="300" class="tree-edge-label" font-size="11" fill="#8B8BA7">TIDAK</text>

        <!-- Root -->
        <g class="tree-node" id="node-root">
          <rect x="325" y="20" width="150" height="40" rx="10" fill="#1B1B3A"/>
          <text x="400" y="44" text-anchor="middle" font-size="12" font-weight="600" fill="#fff">Input Nilai Akademik</text>
        </g>

        <!-- Decision 1 -->
        <g class="tree-node" id="node-d1">
          <rect x="300" y="110" width="200" height="46" rx="10" fill="#FFFFFF" stroke="#D8D5E8" stroke-width="2"/>
          <text x="400" y="130" text-anchor="middle" font-size="11" font-weight="600" fill="#1B1B3A">Software skor tertinggi?</text>
          <text x="400" y="146" text-anchor="middle" font-size="10" fill="#8B8BA7">vs Jaringan &amp; Multimedia</text>
        </g>

        <!-- Leaf: Software -->
        <g class="tree-node" id="leaf-software">
          <rect x="85" y="220" width="180" height="50" rx="12" fill="#FFE3DF" stroke="#FF6B5E" stroke-width="2"/>
          <text x="175" y="240" text-anchor="middle" font-size="12.5" font-weight="700" fill="#1B1B3A">Software (RPL)</text>
          <text x="175" y="257" text-anchor="middle" font-size="10" fill="#5B5B7A">Jalur pemrograman</text>
        </g>

        <!-- Decision 2 -->
        <g class="tree-node" id="node-d2">
          <rect x="490" y="220" width="190" height="46" rx="10" fill="#FFFFFF" stroke="#D8D5E8" stroke-width="2"/>
          <text x="585" y="240" text-anchor="middle" font-size="10.5" font-weight="600" fill="#1B1B3A">Jaringan skor tertinggi?</text>
          <text x="585" y="256" text-anchor="middle" font-size="9.5" fill="#8B8BA7">vs Software &amp; Multimedia</text>
        </g>

        <!-- Leaf: Jaringan -->
        <g class="tree-node" id="leaf-jaringan">
          <rect x="365" y="320" width="175" height="50" rx="12" fill="#FFF6E3" stroke="#F4B942" stroke-width="2"/>
          <text x="452" y="340" text-anchor="middle" font-size="12" font-weight="700" fill="#1B1B3A">Jaringan (Network)</text>
          <text x="452" y="357" text-anchor="middle" font-size="9.5" fill="#5B5B7A">Jalur infrastruktur</text>
        </g>

        <!-- Leaf: Multimedia -->
        <g class="tree-node" id="leaf-multimedia">
          <rect x="600" y="320" width="180" height="50" rx="12" fill="#EFEBFF" stroke="#7C6FF0" stroke-width="2"/>
          <text x="690" y="340" text-anchor="middle" font-size="12" font-weight="700" fill="#1B1B3A">Multimedia &amp; Game</text>
          <text x="690" y="357" text-anchor="middle" font-size="9.5" fill="#5B5B7A">Jalur desain &amp; animasi</text>
        </g>
      </svg>
      <div class="tree-caption">Garis dan kotak yang lebih tebal menandai jalur keputusan yang benar-benar dilalui sistem untuk {{ $mahasiswaTerpilih->nama }}.</div>
    </div>

    <!-- ============ 3. KOMBINATORIKA ============ -->
    <div class="section-head">
      <span class="section-num">03</span>
      <h2 class="font-display">Rekomendasi Teman Bimbingan</h2>
      <span class="sub">disaring dari rumpun sejenis</span>
    </div>

    <div class="combo-explain">
      <div class="reason-card" style="margin-top:0; border:none; padding:0;">
        <div class="icon-wrap">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="7" r="4"/><path d="M3 21v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/><circle cx="17" cy="7" r="3"/><path d="M21 21v-2a3 3 0 0 0-2-2.83"/></svg>
        </div>
        <div>
          Sistem menyaring <b>6 mahasiswa</b> dengan kecenderungan rumpun yang sama denganmu, lalu menghitung semua kemungkinan pasangan pendamping kelompok menggunakan kombinasi &mdash; bukan permutasi, karena urutan nama dalam satu kelompok tidak penting.
        </div>
      </div>
      <div class="combo-formula">C(6, 2) = 6! &divide; (2! &times; 4!) = <span class="result">{{ count($analisis['kombinasi']) }} kelompok</span></div>

      <div class="candidate-grid">
        @foreach($analisis['kandidat_nama'] as $nama)
          <div class="candidate-chip">{{ $nama }}</div>
        @endforeach
      </div>
    </div>

    <div class="combo-list-head">
      <strong class="font-display" style="font-size:15px;">Semua Kombinasi Kelompok</strong>
      <span class="count">{{ count($analisis['kombinasi']) }} variasi ditemukan</span>
    </div>
    <div class="combo-grid">
      @foreach($analisis['kombinasi'] as $index => $kelompok)
        <div class="combo-card">
          <span class="idx">KELOMPOK {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
          <div class="members">
            <span class="chip self">{{ $mahasiswaTerpilih->nama }}</span>
            @foreach($kelompok as $anggota)
              <span class="chip">{{ $anggota }}</span>
            @endforeach
          </div>
        </div>
      @endforeach
    </div>

  @else
    <div class="empty-state">
      <div class="icon-wrap">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      </div>
      <h3 class="font-display">Belum ada mahasiswa dipilih</h3>
      <p>Pilih namamu di kotak pencarian di atas untuk melihat rumpun PA mana yang paling cocok berdasarkan nilai akademikmu.</p>
    </div>
  @endif

  <footer class="page-footer">
    Sistem Rekomendasi Peminatan PA &middot; Kelompok 2 &middot; 2 TI G &middot; Politeknik Caltex Riau
  </footer>

</div>

<script>
  // Animate score bars on load
  document.querySelectorAll('.bar-fill').forEach(function(el){
    var pct = el.getAttribute('data-pct');
    requestAnimationFrame(function(){
      setTimeout(function(){ el.style.width = pct + '%'; }, 80);
    });
  });

  // Highlight the actual decision path on the SVG tree based on which rumpun won
  (function(){
    var rekomendasi = @json($analisis['rekomendasi'] ?? null);
    if(!rekomendasi) return;

    var MUTED_EDGE = '#D8D5E8';
    var ACTIVE_EDGE = '#1B1B3A';

    function activateEdge(id){
      var el = document.getElementById(id);
      if(!el) return;
      var path = el.querySelector('path');
      path.setAttribute('stroke', ACTIVE_EDGE);
      path.setAttribute('stroke-width', '3.5');
    }
    function dimNode(id){
      var el = document.getElementById(id);
      if(!el) return;
      el.style.opacity = '0.35';
    }

    activateEdge('edge-root-d1');

    if(rekomendasi.indexOf('Software') !== -1){
      activateEdge('edge-d1-leafSoftware');
      dimNode('node-d2'); dimNode('leaf-jaringan'); dimNode('leaf-multimedia'); dimNode('edge-d1-d2'); dimNode('edge-d2-leafJaringan'); dimNode('edge-d2-leafMultimedia');
    } else {
      activateEdge('edge-d1-d2');
      dimNode('leaf-software'); dimNode('edge-d1-leafSoftware');
      if(rekomendasi.indexOf('Jaringan') !== -1){
        activateEdge('edge-d2-leafJaringan');
        dimNode('leaf-multimedia'); dimNode('edge-d2-leafMultimedia');
      } else {
        activateEdge('edge-d2-leafMultimedia');
        dimNode('leaf-jaringan'); dimNode('edge-d2-leafJaringan');
      }
    }
  })();
</script>

</body>
</html>
