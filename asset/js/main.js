$(document).ready(function () {
   $('#kota_asal').select2({
      placeholder: 'Pilih kotal',
      language: "id"
   });

   $.ajax({
      type: "GET",
      dataType: "html",
      url: "data-jadwal.php?q=kotaasal",
      success: function (msg) {
         $("select#kota_asal").html(msg);
      }
   });

   $("#ongkir").submit(function (e) {
      e.preventDefault();
      $.ajax({
         url: 'cek-jadwal.php',
         type: 'post',
         data: $(this).serialize(),
         success: function (data) {
            console.log(data);
            document.getElementById("response_ongkir").innerHTML = data;
         }
      });
   });

});
