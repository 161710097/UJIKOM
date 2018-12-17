	$(function() {
    $('#dataTableProduk').DataTable({
        processing: true,
        // serverSide: true,
        ajax: '/kategoriprodukk',
        columns: [
            { data: 'nama', name: 'nama' },
            { data: 'action', orderable:false, searchable: false }
        ]
    });
});
