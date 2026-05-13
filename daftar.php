<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/main.css" rel="stylesheet">

<div class="container mt-5">
    </div>

<form id="formPendaftaran" class="p-4 shadow-sm bg-white rounded">
  <div class="mb-3">
    <label class="form-label font-weight-bold">Nama Lengkap</label>
    <input type="text" id="nama" class="form-control" placeholder="Masukkan nama..." required>
  </div>

  <div class="mb-3">
    <label class="form-label font-weight-bold">Tanggal Pendakian</label>
    <input type="date" id="tanggal" class="form-control" required>
  </div>

  <div class="mb-3">
    <label class="form-label font-weight-bold">Jalur</label>
    <select id="jalur" class="form-select">
      <option value="Selo">Via Selo</option>
      <option value="Suwanting">Via Suwanting</option>
      <option value="Wekas">Via Wekas</option>
      <option value="Wekas">Via Thekelan</option>
      <option value="Wekas">Via Cuntel</option>
    </select>
  </div>

  <button type="submit" id="btnSubmit" class="btn btn-success w-100 p-3 mt-3">
    <span id="btnText">Kirim Pendaftaran</span>
    <span id="btnLoader" class="spinner-border spinner-border-sm d-none" role="status"></span>
  </button>

  <div id="statusPesan" class="mt-3 text-center"></div>
</form>

<script src="script.js"></script>