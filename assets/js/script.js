const baseurl = $('meta[name="baseurl"]').attr("content");

$(document).ready(function() {
  readData();
});

// SWEETALERT
const Toast = Swal.mixin({
	toast: true,
	position: 'bottom-end',
	showConfirmButton: false,
	timer: 3000,
	timerProgressBar: true,
	didOpen: (toast) => {
	toast.addEventListener('mouseenter', Swal.stopTimer)
	toast.addEventListener('mouseleave', Swal.resumeTimer)
	}
})

function sweetalert(icon, title) {
	Toast.fire({
		icon: icon,
		title: title
	})
}

function readData() {
  const keyword = $('#keyword').val();

  if(keyword == null) {
    $.get(`${baseurl}pengguna/readData`, {}, function(data) {
      $('#tbody').html(data);
    }); 
  } else {
    $.get(`${baseurl}pengguna/readData/${keyword}`, {}, function(data) {
      $('#tbody').html(data);
    }); 
  }
}

function showForm(id) {
  if(id == null) {
    $.get(`${baseurl}pengguna/showForm`, {}, function(data) {
      $('#showForm').html(data);
      $('#modal-add').modal('show');
    });
  } else {
    $.get(`${baseurl}pengguna/showForm/${id}`, {}, function(data) {
      $('#showForm').html(data);
      $('#modal-edit').modal('show');
    });
  }
}

// FORM ADD
$('#showForm').on('submit', '.form-add', function(e){
  e.preventDefault();
  $('.close').click();
  $('.modal-backdrop').remove();

  $.ajax({
    type:'POST',
    url: $(this).attr('action'),
    data: $(this).serialize(),
    success: (data) => {
      if(data == "") {
        readData();
        sweetalert('success', 'Data added successfully');
      } else {
        $('#showForm').html(data);
        $('#modal-add').modal('show');
      }
    }
  });
});

// FORM EDIT
$('#showForm').on('submit', '.form-edit', function(e){
	e.preventDefault();
	$('.close').click();
  $('.modal-backdrop').remove();

	$.ajax({
		type:'POST',
		url: $(this).attr('action'),
		data: $(this).serialize(),
		success: (data) => {
			if(data == "") {
				readData();
				sweetalert('success', 'Data berhasil diubah.');
			} else {
				$('#showForm').html(data);
        $('#modal-edit').modal('show');
			}
		}
	});
});

// FORM DELETE
$('#tbody').on('click', '.form-delete', function(e){
	e.preventDefault();
	const id = $(this).data('id');
	const name = $(this).data('name');

	Swal.fire({
		icon: 'warning',
		title: 'Are you sure?',
		text: `Data ${name} will be deleted.`,
		showCancelButton: true,
		confirmButtonText: 'Sure',
	}).then((result) => {
		if (result.isConfirmed) {
			$.post(`${baseurl}pengguna/delete/${id}`, {}, function() {
				readData();
				sweetalert('success', 'Data berhasil dihapus.');
			}); 
		}
	})
});