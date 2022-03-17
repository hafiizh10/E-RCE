$('#tombol_simpan').on('click', function (e) {
	e.preventDefault();
	Swal.fire({
		title: 'Laporan Anda Sedang Diproses',
        text: "Mohon tunggu beberapa saat, laporan anda sedang di proses.",
        icon: 'warning',
		allowEscapeKey: false,
		allowOutsideClick: false,
		timer: 2000,
		onOpen: () => {
			swal.showLoading();
		}
	}).then(() => {
		$("#form_laporan").submit();
	})
});
