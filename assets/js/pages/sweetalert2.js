// $("#konfirmasiID").click(async (e) => {
// 	var id = $(this).attr("data-id");
// 	const { value: password } = await Swal.fire({
// 		title: "Konfirmasi Pembayaran",
// 		input: "text",
// 		inputPlaceholder: "Masukan Kode pemesanan",
// 		inputAttributes: {
// 			maxlength: 10,
// 			autocapitalize: "off",
// 			autocorrect: "off",
// 		},
// 		inputValidator: (value) => {
// 			return new Promise((resolve) => {
// 				if (value === id) {
// 					resolve();
// 				} else {
// 					resolve("Kode Pemesanan tidak sesuai");
// 				}
// 			});
// 		},
// 	});
// 	if (password) {
// 		Swal.fire({
// 			icon: "success",
// 			title: "Konfirmasi Berhasil",
// 			showConfirmButton: false,
// 			timer: 1500,
// 		});
// 	}
// });
