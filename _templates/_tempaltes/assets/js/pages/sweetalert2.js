document.getElementById('password').addEventListener('click', async (e) => {

    const { value: password } = await Swal.fire({
        title: 'Konfirmasi Pembayaran',
        input: 'password',
        inputPlaceholder: 'Masukan Kode pemesanan',
        inputAttributes: {
        maxlength: 10,
        autocapitalize: 'off',
        autocorrect: 'off'
        },   
      inputValidator: (value) => {
      return new Promise((resolve) => {
        if (value === '1234') {
          resolve()
        } else {
          resolve('Kode Pemesanan tidak sesuai')
        }
      })
    }
  })

    if (password) {
        Swal.fire({
          icon: 'success',
          title: 'Konfirmasi Berhasil',
          showConfirmButton: false,
          timer: 1500
        })
    }
  
})