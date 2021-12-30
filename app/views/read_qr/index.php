<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="html5-qrcode.min.js"></script>
<style>
  .result {
    background-color: green;
    color: #fff;
    padding: 5px;
    width: 500px;
  }

  .row {
    display: flex;
  }
</style>
<div class="row">
  <div class="col">
    <div style="width:500px;" id="reader"></div>
  </div>
  <div class="col" style="padding:30px;">
    <h4>SCAN RESULT</h4>
    <form action="insertdata.php" method="post">
      <div id="result">Result Here</div>
    </form>

  </div>
</div>
<script type="text/javascript">
  function onScanSuccess(qrCodeMessage) {
    document.getElementById('result').innerHTML = '<input class="result" type="text" name="post_name" value="' + qrCodeMessage + '">';
    setTimeout(
      () => {
        document.forms[0].submit();
      },
      2 * 1000
    );

  }

  function onScanError(errorMessage) {
    //handle scan error
  }
  var html5QrcodeScanner = new Html5QrcodeScanner(
    "reader", {
      fps: 10,
      qrbox: 250
    });
  html5QrcodeScanner.render(onScanSuccess, onScanError);
</script>