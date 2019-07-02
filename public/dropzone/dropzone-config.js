const baseUrl = document.getElementById('base').value;

Dropzone.options.productPics = {
  maxFileSize:5,
  acceptedFiles: 'images/*, .png, .jpg, .jpeg, .bmp, .bpg, .gif',
  success:function(file, response){
  	if (file.status  == "success")
  	 {
  	 	handleDropZoneFileUpload.handleSuccess(response)
  	 }else{
  	 	handleDropZoneFileUpload.handleError(response)
  	 }
  }

}
const handleDropZoneFileUpload  = {
	handleError:function(response){
		console.log(response);
	},
	handleSuccess:function(response){
     console.log(response);
     const pictures= document.querySelector('#pics');
     const picSrc = baseUrl + '/' + response.picture
     $(pictures).append(`
             <div class="col-md-2">
             <h5>
             <a href="${picSrc}" target="_blank">
             <img src="${picSrc}" style="max-width: 100%; height: auto;" />
             </a>
             <a href="${baseUrl}/products/pictures/delete/${response.id}" title="Delete" class="btn btn-danger btn-xs">
             Delete</a>
             </h5>
             </div>

           
     	`)
	}
}
