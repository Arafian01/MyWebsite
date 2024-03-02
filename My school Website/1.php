<!DOCTYPE html>
<html>
  <head>
    <title>form tambah data</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      line-height: 22px;
      }
      body {
      background: url("https://www.smkn1kawali.sch.id/img/beranda/heroimage/WhatsApp%20Image%202021-03-17%20at%2009.31.32.jpeg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <?php
        include "koneksi.php";
        $id   = $_GET['id'];
        $query  =mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'")or die(mysqli_error());
        while ($row=mysqli_fetch_array($query)) {
    ?>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>Form Pendaftaran UKK</h1>
        <p>Membentuk siswa-siswa yang unggul,berkarater serta memiliki kesiapan untuk bekerja maupun wirausaha</p>
      </div>
      <form action="update.php?id=<?php echo $id; ?>" method="POST">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <label>NIS</label>
          <input type="number" name="NIS" placeholder="NIS" required value='<?php echo $row["NIS"] ?>'>
          <label>Nama</label>
          <input type="text" name="Nama" placeholder="Nama" required value='<?php echo $row["Nama"] ?>'>
          <label>NIK</label>
          <input type="NIK" name="NIK" placeholder="NIK" required value='<?php echo $row['NIK'] ?>'>
          <div class="form-check form-check-inline">
            <label>Jenis Kelamin :</label>
              &emsp;
                <input type="radio" class="form-check-input" id="validationFormCheck2" name="Gender" value="Laki-Laki" required>
                <label class="form-check-label" for="validationFormCheck2">Laki-Laki</label>
              &emsp;
                <input type="radio" class="form-check-input" id="validationFormCheck3" name="Gender" value="Perempuan" required>
                <label class="form-check-label" for="validationFormCheck3">Perempuan</label>
            </div>
            <div class="form-check form-check-inline">
          <label>Kelas</label>
          <select class='form-select'>
            <option selected disabled value="">Kelas</option>
            <option value='X'>X</option>
            <option value='XI'>XI</option>
            <option value='XII'>XII</option>
          </select>
        </div>
          <select>
            <option selected disabled value="">Jurusan</option>
            <option value="TKR">TKR</option>
            <option value="TKJ">TKJ</option>
            <option value="RPL">RPL</option>
            <option value="OTKP">OTKP</option>
            <option value="AKL">AKL</option>
            <option value="DPIB">DPIB</option>
            <option value="SK">SK</option>
          </select>
        </div>
        <button type="submit">Submit</button>
        <button type="submit" href="tabel.php">Kembali</button>
      </form>
    </div>
    <?php } ?>

  </body>
</html>

<!-- <form action="insert_data.php" method="POST">
    <div class="container">
      <h3 class="mb-5 mt-5">TAMBAH DATA</h3>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">NIS</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="validationCustom01" name="NIS" required>
        </div>

      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="validationCustom01" name="Nama" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-4">
          <input type="number" class="form-control" id="validationCustom01" name="NIK" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-4">
          <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="validationFormCheck2" name="Gender" value="Laki-Laki" required>
        <label class="form-check-label" for="validationFormCheck2">Laki-Laki</label>
      </div>
      <div class="form-check form-check-inline">
        <input type="radio" class="form-check-input" id="validationFormCheck3" name="Gender" value="Perempuan" required>
        <label class="form-check-label" for="validationFormCheck3">Perempuan</label>
      </div>
        </div>
      </div>
      <div class='mb-3 row'>
      <label class='col-sm-2 col-form-label'>Kelas</label>
      <div class='col-sm-4'>
          <select class='form-select' aria-label='Default select example' name='kelas' id="validationCustom04" required>
          <option selected disabled value="">-Pilih-</option>
          <option value='X'>X</option>
        <option value='XI'>XI</option>
        <option value='XII'>XII</option>
        </select>
      </div>
    </div>
      <div class="mb-3 row">
        <label class="col-sm-2 col-form-label" for="validationCustom04">Jurusan</label>
        <div class="col-sm-4">
          <select class="form-select" aria-label="Default select example" name="Jurusan" id="validationCustom05" required>
        <option selected disabled value="">-Pilih-</option>
        <option value="TKR">TKR</option>
        <option value="TKJ">TKJ</option>
        <option value="RPL">RPL</option>
        <option value="OTKP">OTKP</option>
        <option value="AKL">AKL</option>
        <option value="DPIB">DPIB</option>
        <option value="SK">SK</option>
      </select>
        </div>
      </div>
      <div class="d-grid gap-2 d-md-block">
      <a href="tabel.php" class="btn btn-danger" type="button">BACK</a>
      <input type="submit" class="btn btn-primary" value="SIMPAN">
    </div>
      </div>
  </form> -->
  <!DOCTYPE html>
<html>
  <head>
    <title>Conference Room Reservation</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 34px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/50d7a918b0cd14570b3281e08c5ddfb7d299332e.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>Conference Room Reservation</h1>
        </div>
        <div class="item">
          <label for="name">Name<span>*</span></label>
          <input id="name" type="text" name="name" required/>
        </div>
        <div class="item">
          <label for="email">Email Address<span>*</span></label>
          <input id="email" type="email" name="email" required/>
        </div>
        <div class="item">
          <label for="attendees">Number of Attendees <span>*</span></label>
          <input id="attendess" type="text" name="attendees" required/>
        </div>
        <div class="item">
          <label for="position">Position<span>*</span></label>
          <input id="position" type="text" name="position" required/>
        </div>
        <div class="item">
          <label for="department">Department<span>*</span></label>
          <input id="department" type="text" name="department" required/>
        </div>
        <div class="item">
          <label for="phone">Phone<span>*</span></label>
          <input id="phone" type="number" placeholder="(XXX) XXX-XXXX"  name="phone" required/>
        </div>
        <div class="item">
          <label for="bdate">Date<span>*</span></label>
          <input id="bdate" type="date" name="bdate" required/>
          <i class="fas fa-calendar-alt"></i>
        </div>
        <div class="flax">
          <div class="item">
            <p>Start Time</p>
            <select>
              <option selected value="" disabled selected></option>
              <option value="8A" >8 AM</option>
              <option value="9A">9 AM</option>
              <option value="10A">10 AM</option>
              <option value="11A">11 Am</option>
              <option value="12P">12 Pm</option>
              <option value="1P">1 Pm</option>
              <option value="2P">2 Pm</option>
              <option value="3P">3 Pm</option>
              <option value="4P">4 Pm</option>
              <option value="5P">5 Pm</option>
              <option value="6P">6 Pm</option>
              <option value="7P">7 Pm</option>
              <option value="8P">8 Pm</option>
            </select>
          </div>
          <div class="item">
            <p>End Time</p>
            <select>
              <option selected value="" disabled selected></option>
              <option value="8A" >8 AM</option>
              <option value="9A">9 AM</option>
              <option value="10A">10 AM</option>
              <option value="11A">11 Am</option>
              <option value="12P">12 Pm</option>
              <option value="1P">1 Pm</option>
              <option value="2P">2 Pm</option>
              <option value="3P">3 Pm</option>
              <option value="4P">4 Pm</option>
              <option value="5P">5 Pm</option>
              <option value="6P">6 Pm</option>
              <option value="7P">7 Pm</option>
              <option value="8P">8 Pm</option>
            </select>
          </div>
        </div>
        <div class="item">
          <label for="instructions">Special Instructions</label>
          <textarea id="instructions" rows="3"></textarea>
        </div>
        <p><small>0/100 characters</small></p>
        <div class="btn-block">
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
  </body>
</html>