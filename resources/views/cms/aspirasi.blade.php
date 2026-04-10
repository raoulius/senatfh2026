@extends("cms.layouts.layout")

@section("content")
  <link href="{{ URL::asset("cms/styleaspirasi.css") }}" rel="stylesheet">

  <style>
    .cms-toast {
      position: fixed;
      top: 24px;
      right: 24px;
      z-index: 9999;
      min-width: 280px;
      max-width: 420px;
      padding: 14px 20px;
      border-radius: 8px;
      font-size: 14px;
      font-family: sans-serif;
      box-shadow: 0 4px 16px rgba(0,0,0,0.18);
      display: flex;
      align-items: center;
      gap: 10px;
      opacity: 1;
      transition: opacity 0.5s ease;
    }
    .cms-toast.success { background: #d1fae5; color: #065f46; border-left: 4px solid #059669; }
    .cms-toast.error   { background: #fee2e2; color: #7f1d1d; border-left: 4px solid #dc2626; }
    .cms-toast .toast-icon { font-size: 18px; flex-shrink: 0; }
    .cms-toast .toast-close {
      margin-left: auto;
      cursor: pointer;
      font-size: 18px;
      line-height: 1;
      opacity: 0.6;
    }
    .cms-toast .toast-close:hover { opacity: 1; }
    .cms-toast.fade-out { opacity: 0; pointer-events: none; }
  </style>

  @if (session('success'))
    <div class="cms-toast success" id="cms-toast">
      <span class="toast-icon">✓</span>
      <span>{{ session('success') }}</span>
      <span class="toast-close" onclick="dismissToast()">×</span>
    </div>
  @endif

  @if (session('error') || $errors->any())
    <div class="cms-toast error" id="cms-toast">
      <span class="toast-icon">✕</span>
      <span>
        @if (session('error'))
          {{ session('error') }}
        @else
          {{ $errors->first() }}
        @endif
      </span>
      <span class="toast-close" onclick="dismissToast()">×</span>
    </div>
  @endif

  <script>
    function dismissToast() {
      var t = document.getElementById('cms-toast');
      if (t) { t.classList.add('fade-out'); setTimeout(function(){ t.remove(); }, 500); }
    }
    document.addEventListener('DOMContentLoaded', function () {
      var t = document.getElementById('cms-toast');
      if (t) { setTimeout(function(){ dismissToast(); }, 4000); }
    });
  </script>

  <body>
    <h1>Admin CMS - Bank Aspirasi</h1>

    <h2>Data Aspirasi</h2>

    <table class="item" border="1">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Angkatan</th>
          <th>ID Line</th>
          <th>Message</th>
          <th>Publish</th>
          <th>Workflow Status</th>
          <th>Tipe ID</th>
          <th>Answer</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($aspirasis as $aspirasi)
          <tr>
            <td>{{ $aspirasi->id }}</td>
            <td>{{ $aspirasi->name }}</td>
            <td>{{ $aspirasi->email }}</td>
            <td>{{ $aspirasi->angkatan }}</td>
            <td>{{ $aspirasi->id_line }}</td>
            <td>{{ $aspirasi->message }}</td>
            <td>{{ $aspirasi->is_actived ? "Active" : "Inactive" }}</td>
            <td>{{ $statusLabels[$aspirasi->status] ?? ucfirst(str_replace('_', ' ', $aspirasi->status ?? 'submitted')) }}</td>
            <td>{{ $aspirasi->tipe_aspirasi_id }}</td>
            <td>{{ $aspirasi->answer }}</td>
            <td>
              <form action="{{ route("admin.update", $aspirasi->id) }}" method="post">
                @csrf
                @method("PUT")

                <label>Status: </label>
                <select class="btn" name="is_actived">
                  <option value="1" {{ $aspirasi->is_actived ? "selected" : "" }}>Active</option>
                  <option value="0" {{ !$aspirasi->is_actived ? "selected" : "" }}>Inactive</option>
                </select>
                <br>

                <label>Workflow Status: </label>
                <select class="btn" name="status">
                  @foreach ($statusOptions as $status)
                    <option value="{{ $status }}" {{ ($aspirasi->status ?? 'submitted') === $status ? 'selected' : '' }}>
                      {{ $statusLabels[$status] }}
                    </option>
                  @endforeach
                </select>
                <br>

                <label>Tipe ID: </label>
                <select class="btn" name="tipe_aspirasi_id">
                  <option value="1" {{ $aspirasi->tipe_aspirasi_id == 1 ? "selected" : "" }}>Sarana Prasarana</option>
                  <option value="2" {{ $aspirasi->tipe_aspirasi_id == 2 ? "selected" : "" }}>Birokrasi</option>
                  <option value="3" {{ $aspirasi->tipe_aspirasi_id == 3 ? "selected" : "" }}>Akademik</option>
                </select>
                <br>

                <label>Answer: </label>
                <textarea name="answer">{{ $aspirasi->answer }}</textarea>
                <br>

                <button class="btn" type="submit">Update</button>
              </form>

              <form action="{{ route("admin.delete", $aspirasi->id) }}" method="post">
                @csrf
                @method("DELETE")
                <button class="btn" type="submit">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </body>
@endsection
