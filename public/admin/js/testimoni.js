	$(function() {
    $('#dataTabletestimoni').DataTable({
        processing: true,
        // serverSide: true,
        ajax: '/testimonis',
        columns: [
            { data: 'nama', name: 'nama' },
            { data: 'profesi', name: 'profesi' },
            { data: 'deskripsi', name: 'deskripsi' },
            { data: 'action', orderable:false, searchable: false }
        ]
    });
});
