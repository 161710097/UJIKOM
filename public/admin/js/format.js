
  var harga = document.getElementById('harga');
      harga.addEventListener('keyup',function(e)
      {
        harga.value = formatRupiah(this.value);
      });

      function formatRupiah(angka, prefix)
      {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split = number_string.split(','),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
          separator = sisa ? '.' : '';
          rupiah += separator + ribuan.join('.');

        }
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp.' + rupiah : '');
      }

      function number (evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode >31 && (charCode < 48 || charCode >57)) 
          return false;
        return true;
      }

      $('body').on('change', '#harga', function(){
        var harga = $('#harga').val();
        var clean_beli = harga.replace(/\D/g, '');

        $('#raw_harga_beli').val(clean_beli);

      });
      
