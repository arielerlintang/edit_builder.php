<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/styleelement.css") ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/dist/css/styleupload.css") ?>">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

<style>
  .peped-30 {
    padding: 30px!important;
  }
  .peped-10 {
    padding: 10px!important;
  }
  a.draggable {
  display: inline-block;
  cursor: move;
}
.sembarang {
  min-height: 100px;
  border: 1px dashed #ccc;
}
[class^="col-md-"] {
  min-height: 100px;
}
.solid-section {
  background: #e1e1e1;
}
</style>
<div class="bg-light py-3">
  <div class="container-fluid px-5">
    <a href="<?php echo base_url("sw-admin/element") ?>" class="btn btn-primary">Return to Admin</a>
  </div>
</div>
<section class="container-fluid px-5">
  <form method="post">


    <div class="form-group mb-3">
      <label>Title</label>
      <input type="text" class="form-control" name="post_title" placeholder="Post Title" value="<?php echo set_value("post_title", $element['post_title']) ?>">
      <?php echo form_error("post_title") ?>
      <textarea name="post_content" style="display: none;" id="hiddentext"><?php echo $element['post_content'] ?></textarea>
    </div>
    <div class="isis">
      <div class="row jangan">
        <div class="col-md-3 no-border">
          <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Area</button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <button id="section1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="section">Section</button>
                  <button id="section2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="solid section">Solid Section</button>
                  <button id="container1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="container">Container</button>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Grid</button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">


                  <button id="grid2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="grid2">Grid 2</button>
                  <button id="grid2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="grid3">Grid 3</button>
                  <button id="grid2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="grid4">Grid 4</button>
                  <button id="row1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="row">Row</button>
                  <button id="g1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid1">Isi Grid 1</button>
                  <button id="g2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid2">Isi Grid 2</button>
                  <button id="g3" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid3">Isi Grid 3</button>
                  <button id="g4" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid4">Isi Grid 4</button>
                  <button id="g5" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid5">Isi Grid 5</button>
                  <button id="g6" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid6">Isi Grid 6</button>
                  <button id="g7" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid7">Isi Grid 7</button>
                  <button id="g8" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid8">Isi Grid 8</button>
                  <button id="g9" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid9">Isi Grid 9</button>
                  <button id="g10" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="isigrid10">Isi Grid 10</button>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsenavbar" aria-expanded="false" aria-controls="flush-collapsenavbar">Navbar</button>
              </h2>
              <div id="flush-collapsenavbar" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <button id="navbar1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="navbar">outline-info Navbar</button>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">Text</button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <button id="h1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h1">Heading 1</button>
                  <button id="h2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h2">Heading 2</button>
                  <button id="h3" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h3">Heading 3</button>
                  <button id="h4" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h4">Heading 4</button>
                  <button id="h5" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h5">Heading 5</button>
                  <button id="h6" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="h6">Heading 6</button>
                  <button id="p1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="p">Paragraph</button>

                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">Etc</button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">

                  <button id="sliderx" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="carousel caption">Carousel Caption</button>
                  <button id="slider1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="carousel">Carousel</button>
                  <button id="slider2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="multi carousel">Multi Carousel</button>
                  <button id="slider2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="double carousel">Double Carousel</button>
                  <button id="image1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="image">image</button>
                  <button id="image2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="image rounded">image rounded</button>
                  <button id="link1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="link">Link</button>
                  <button id="iframe1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="iframe">Iframe</button>
                  <button id="card1" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="vertical card">Vertical Card</button>
                  <button id="card2" class="btn btn-outline-info draggable" draggable="true" ondragstart="drag(event)" data-type="horizontal card">Horizontal Card</button>

                </div>
              </div>
            </div>
          </div>

          <div id="letak" class="py-2"></div>
        </div>
        <div class="col-md-9 ">
          <div id="eekditor" ondrop="drop(event)" ondragover="allowDrop(event)" style="max-height: 600px;overflow-y: scroll;"><?php echo $element['post_content'] ?></div>
          <br>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div class="row">
          <div class="col-6 text-start">
            <button class="btn btn-primary">Save</button>
          </div>
          <div class="col-6 text-end">
            <a href="<?php echo base_url("sw-admin/element") ?>" class="btn btn-danger">Close</a>
          </div>
        </div>
      </div>
    </div>

  </form>
</section>

<div class="modal fade" id="image-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg modal-xl" role="document">
    <div class="modal-content" style="border-radius: 0px">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Media Library</h4>
      </div>
      <div class="modal-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Upload File</button>
        </li>
        <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Media Library</button>
        </li>


        </ul>
        <br>
        <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
          <form  id="uploadimage" method="post" enctype="multipart/form-data" action="" class="form-upload">
            <div class="form-group files">
              <input type="file" class="name" name="name">
            </div>
            <div class="progress hidden">
              <div class="progress-bar" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
              </div>
            </div>
          </form>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <div class="row">
                <div class="col-md-9" style="border-right: 1px solid #f1f1f1">
                  <form method="post"  style="margin-bottom: 10px;">
                    <div class="form-group">
                      <div class="input-group mb-2">
                        <input type="text" class="form-control" name="search" placeholder="Media title..">
                        <div class="input-group-btn">
                          <button class="btn btn-primary btn-search">Search</button>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div class="clearfix"></div>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar"  aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                  </div>
                  <div class=" media-holder">
                    <div class="row media-place"></div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                      <a href="" class="btn btn-default btn-load-more" posisi="0" batas="4">
                        <i class="fa fa-reload"></i> Load More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-edit hidden">
                    <form method="post">
                      <div class="form-group">
                        <a href="" class="delete text-danger small">Delete Permanent</a>
                      </div>
                      <input type="hidden" name="media_id" class="form-control">
                      <div class="form-group">
                        <label>Url</label>
                        <input type="text" class="form-control" name="media_url" readonly>
                      </div>
                      <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="media_title" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Size</label>
                        <select class="form-control size">
                          <option value="">Original Size</option>
                          <option value="thumbnail">Thumbnail</option>
                          <option value="large">Large</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Caption</label>
                        <textarea class="form-control" name="media_caption"></textarea>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary disabled" id="insert">Insert Post</button>
      </div>
    </div>
  </div>
</div>


<script>
let selected_id;
setInterval(function() {
    const editorContent = document.getElementById('eekditor').innerHTML;
    document.getElementById('hiddentext').value = editorContent;
}, 1000);

$(document).ready(function(){
  $(".delete").on("click",function(e){
    e.preventDefault();
    var media_id = $("input[name=media_id]").val();
    $.ajax({
      type:'POST',
      url:'<?php echo base_url("ajax/deletemedia") ?>',
      data:'id='+media_id,
      success:function(result)
      {
        $.ajax({
          type:'POST',
          data:'batas='+4+'&posisi='+0,
          url:'<?php echo base_url("ajax/showmedia") ?>',
          success:function(hasil)
          {
            $('.progress').addClass("hidden");
            setTimeout(function (){
              $(".media-place").html(hasil);
            }, 500);
            $(".form-edit").removeClass("show");
            $(".form-edit").addClass("hidden");
            $(".btn-load-more").attr("posisi","0");
          }
        });
      }
    });
  });
});
$(document).ready(function(){
  $(".btn-load-more").on("click",function(e){
    e.preventDefault();
    // alert("teka kenen");
    var posisi = $(this).attr("posisi");
    var batas = $(this).attr("batas");
    var posisi = parseInt(posisi)+parseInt(4);

    $(this).attr("posisi",posisi);
    $.ajax({
      type:'POST',
      data:'batas='+batas+'&posisi='+posisi,
      url:'<?php echo base_url("ajax/showmedia") ?>',
      success:function(hasil)
      {
        $('.progress').addClass("hidden");
        setTimeout(function () {
          console.log(hasil);
          $(".media-place").append(hasil);
        }, 500);
      }
    });
  });
});
$(document).ready(function(){
  $(".btn-search").on("click",function(e){
    e.preventDefault();
    var search = $("input[name=search]").val();
    $.ajax({
      type:'POST',
      url:'<?php echo base_url("ajax/searchmedia") ?>',
      data:'title='+search,
      success(result)
      {
        $(".media-place").html(result);
      }
    })
  })
})
$(document).ready(function(){
  $(".add-media").on("click",function(e){
    e.preventDefault();
    $("#image-modal").modal();
    $('#media').tab('show');
    $("#insert").addClass("btn-insert");
    $("#insert").removeClass("btn-featured");
    $("#insert").html("Insert Post");
  })
});
$(document).ready(function(){
  $(document).on("click",'.btn-insert',function(e){
    e.preventDefault();
    var size = $(".size").val();
    if (size=="thumbnail") {
      var usize = "400_300_";
    } else if (size=="large") {
      var usize = "640_480_";
    } else {
      var usize = "";
    }
    console.log(usize);
    var url = $("input[name=media_url]").val();
    var src = '<?php echo base_url("assets/media/") ?>'+usize+url;
    var img = "<img src='"+src+"' class='default' data-size='"+size+"' data-name='"+url+"'>";

    CKEDITOR.instances.editor.insertHtml(img);
    
    // get the image double clik on ckeditor
    var imageck = $(".cke_wysiwyg_frame").contents().find("img");
    $(imageck).on('dblclick', function(event)
    {

        var src = $(this).attr("data-name");
        var sz = $(this).attr("data-size");
        if (sz=="thumbnail") {
          var usz = "400_300_";
        } else if (sz=="large") {
          var usz = "640_480_";
        } else {
          var usz = "";
        }
        var usrc = '<?php echo base_url("assets/media/") ?>'+usz+src;
        console.log(usrc);
        $('.media-image').removeClass('img-selected');
      $(".media-image[media-title='"+src+"']").addClass("img-selected");
      var media_id = $(".media-image[src='"+usrc+"']").attr("idnya");
      $.ajax({
        type:'POST',
        url:'<?php echo base_url("ajax/getmedia") ?>',
        data:'id='+media_id,
        dataType: "json",
        success:function(hasil)
        {
            $("#image-modal").modal();
          $('#media').tab('show');
          $("#insert").addClass("btn-insert");
          $("#insert").removeClass("btn-featured");
          $("#insert").html("Insert Post");

          $(".form-edit").removeClass("hidden");
          $(".form-edit").addClass("show");
          $("input[name=media_id]").val(hasil.media_id);
          $("input[name=media_url]").val(hasil.media_url);
          $("input[name=media_title]").val(hasil.media_title);
          $("textarea[name=media_caption]").html(hasil.media_caption);
          $("#insert").removeClass("disabled");
        }
      })
    });
    $("#image-modal").modal("hide");
    $("#insert").removeClass("btn-insert");
  });
});

$(document).ready(function(e){
  $("#uploadimage").on("change",function(e){
    e.preventDefault();
    var file_data = $(".name").prop("files")[0];   
    var form_data = new FormData();
    form_data.append('file', file_data);
    $(".progress").removeClass("hidden");
    $.ajax({
      xhr: function()
      {
        var xhr = new window.XMLHttpRequest();
        xhr.upload.addEventListener("progress", function(evt) {
          if (evt.lengthComputable) {
            var percentComplete = evt.loaded / evt.total;
            percentComplete = parseInt(percentComplete * 100);
            $('.progress-bar').css('width',percentComplete+"%");
            $('.progress-bar').html(percentComplete+"%");
            if (percentComplete === 100) {

            }
          }
        }, false);
        return xhr;
      },
      url: '<?php echo base_url("ajax/uploadmedia") ?>',
      dataType: 'text',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,                         
      type: 'post',
      success: function(lastid)
      {
        $('a[href="#media"]').tab('show');
        $('.progress').removeClass("hidden");
        $("input[type=file]").val(null);
        $.ajax({
          xhr: function()
          {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
              if (evt.lengthComputable) {
                var percentComplete = evt.loaded / evt.total;
                percentComplete = parseInt(percentComplete * 100);
                $('.progress-bar-image').css('width',percentComplete+"%");
                $('.progress-bar-image').html(percentComplete+"%");
                if (percentComplete === 100) {

                }
              }
            }, false);
            return xhr;
          },
          type:'POST',
          data:'posisi='+0+'&batas='+4,
          url:'<?php echo base_url("ajax/showmedia") ?>',
          success:function(hasil)
          {
            $('.progress').addClass("hidden");
            $(".media-place").html(hasil);
            $('.media-image[idnya="'+lastid+'"]').addClass("img-selected");
            $.ajax({
              type:'POST',
              url:'<?php echo base_url("ajax/getmedia") ?>',
              data:'id='+lastid,
              dataType: "json",
              success:function(hasil)
              {
                $("#insert").removeClass("disabled");
                $(".form-edit").removeClass("hidden");
                $(".form-edit").addClass("show");
                $("input[name=media_id]").val(hasil.media_id);
                $("input[name=media_url]").val(hasil.media_url);
                $("input[name=media_title]").val(hasil.media_title);
                $("textarea[name=media_caption]").html(hasil.media_caption);
              }
            })
          }
        })
      }
    });
  });
});



$(document).ready(function(){
  $(document).on("clik", "#eekditor a", function(e){
    e.preventDefault();
  })
})
$(document).ready(function() {
  $(document).on("click", "#eekditor a *", function(e) {
    e.preventDefault();
    return false;
  });
});

function allowDrop(event) {
  event.preventDefault();
  event.dataTransfer.dropEffect = "move";
}

function drag(event, isInsideeekditor) {
  const target = event.target.closest(".draggable");
  if (!target) return;

  console.log(isInsideeekditor ? "Drag dari dalam editor" : "Drag dari sidebar");

  if (!isInsideeekditor) {
    const type = target.dataset.type;

    // Komponen dari sidebar
    let htmlGenerator = getComponentHTMLByType(type);
    if (htmlGenerator) {
      event.dataTransfer.setData("element", htmlGenerator());
      event.dataTransfer.setData("isInsideeekditor", "false");
      return;
    }

    // Default cloning jika tidak dikenali
    const clone = target.cloneNode(true);
    const uniqueId = "clone-" + Math.random().toString(36).substr(2, 9);
    clone.id = uniqueId;

    clone.querySelectorAll("[id]").forEach(child => {
      child.id = `${uniqueId}-${child.id}`;
    });

    event.dataTransfer.setData("element", clone.outerHTML);
    event.dataTransfer.setData("isInsideeekditor", "false");

  } else {
    event.dataTransfer.setData("elementId", target.id);
    event.dataTransfer.setData("isInsideeekditor", "true");
  }
}
function drop(event) {
  event.preventDefault();

  let isInsideeekditor = event.dataTransfer.getData("isInsideeekditor") === "true";
  let elementHTML = event.dataTransfer.getData("element");
  let elementId = event.dataTransfer.getData("elementId");

  let dropTarget = event.target;

  while (!dropTarget.classList.contains("draggable") && dropTarget.id !== "eekditor") {
    dropTarget = dropTarget.parentElement;
    if (!dropTarget) return;
  }

  const container = dropTarget.id === "eekditor" ? dropTarget :
    dropTarget.closest("#eekditor, #eekditor a, .row, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .sembarang, .card-body") || dropTarget;

  const mouseY = event.clientY;
  const children = Array.from(container.children).filter(child => child !== document.getElementById(elementId));
  let nearest = null;

  for (let child of children) {
    const rect = child.getBoundingClientRect();
    const middleY = rect.top + rect.height / 2;
    if (mouseY < middleY) {
      nearest = child;
      break;
    }
  }

  if (isInsideeekditor) {
    let existingElement = document.getElementById(elementId);
    if (!existingElement || existingElement === nearest) return;

    if (nearest) {
      container.insertBefore(existingElement, nearest);
    } else {
      container.appendChild(existingElement);
    }

    // ✅ Re-assign dragstart ke semua anak draggable
    registerDraggableElements(existingElement);

  } else {
    let tempDiv = document.createElement("div");
    tempDiv.innerHTML = elementHTML.trim();
    let newElement = tempDiv.firstElementChild;

    if (!newElement) {
      console.error("Gagal membuat elemen dari HTML:", elementHTML);
      return;
    }

    if (nearest) {
      container.insertBefore(newElement, nearest);
    } else {
      container.appendChild(newElement);
    }

    // ✅ Tambahkan listener dragstart ke elemen baru
    registerDraggableElements(newElement);
  }

  console.log("saya jatuh");
}


function registerDraggableElements(root = document) {
  root.querySelectorAll(".draggable").forEach(el => {
    el.setAttribute("draggable", "true");
    el.addEventListener("dragstart", function (event) {
      event.stopPropagation(); // 🛑 Cegah parent mengambil alih
      drag(event, true);
    });
  });
}


function getComponentHTMLByType(type) {
  const componentMap = {
    "carousel": getCarouselHTML,
    "carousel caption": getCarouselCaptionHTML,
    "multi carousel": getMultiCarouselHTML,
    "double carousel": getDoubleCarouselHTML,
    "image": getImageHTML,
    "image rounded": getImageRoundedHTML,
    "section": getSectionHTML,
    "solid section": getSolidSectionHTML,
    "container": getContainerHTML,
    "row": getRowHTML,
    "grid2": getGrid2HTML,
    "grid3": getGrid3HTML,
    "grid4": getGrid4HTML,
    "h1": getH1HTML,
    "h2": getH2HTML,
    "h3": getH3HTML,
    "h4": getH4HTML,
    "h5": getH5HTML,
    "h6": getH6HTML,
    "p": getPHTML,
    "link": getLinkHTML,
    "iframe": getIframeHTML,
    "horizontal card": getHorizontalCardHTML,
    "vertical card": getVerticalCardHTML,
    "navbar": getNavbarHTML,
    "isigrid1": getisigrid1HTML,
    "isigrid2": getisigrid2HTML,
    "isigrid3": getisigrid3HTML,
    "isigrid4": getisigrid4HTML,
    "isigrid5": getisigrid5HTML,
    "isigrid6": getisigrid6HTML,
    "isigrid7": getisigrid7HTML,
    "isigrid8": getisigrid8HTML,
    "isigrid9": getisigrid9HTML,
    "isigrid10": getisigrid10HTML,
  };
  return componentMap[type] || null;
}
// function registerDraggableListeners() {
//   document.querySelectorAll(".draggable").forEach(el => {
//     el.removeEventListener("dragstart", dragHandler);
//     el.addEventListener("dragstart", function (event) {
//       drag(event, true);
//     });
//   });
// }




document.getElementById("eekditor").addEventListener("drop", function(e) {
  console.log("DROP TARGET IS:", e.target);
});

function getCarouselHTML() {
  const uid = "carousel-" + Math.random().toString(36).substr(2, 6);
  const id1 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const id2 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const id3 = "carousel-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://placehold.co/800x400?text=Slide+1" id="${id1}" class="d-block w-100" alt="Slide 1">
      </div>
      <div class="carousel-item">
        <img src="https://placehold.co/800x400?text=Slide+2" id="${id2}" class="d-block w-100" alt="Slide 2">
      </div>
      <div class="carousel-item">
        <img src="https://placehold.co/800x400?text=Slide+3" id="${id3}" class="d-block w-100" alt="Slide 3">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#${uid}" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#${uid}" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>`;
}
function getCarouselCaptionHTML() {
  const uid = "carousel-" + Math.random().toString(36).substr(2, 6);
  const img1 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const img2 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const img3 = "carousel-" + Math.random().toString(36).substr(2, 6);

  const tit1 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const tit2 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const tit3 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const text1 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const text2 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const text3 = "carousel-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#${uid}" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#${uid}" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#${uid}" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://placehold.co/1200x400?text=Slide+1" class="d-block w-100" alt="..." id="${img1}">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="${tit1}">First slide label</h5>
          <p id="${text1}">Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://placehold.co/1200x400?text=Slide+2" class="d-block w-100" alt="..." id="${img2}">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="${tit2}">Second slide label</h5>
          <p id="${text2}">Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://placehold.co/1200x400?text=Slide+3" class="d-block w-100" alt="..." id="${img3}">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="${tit3}">Third slide label</h5>
          <p id="${text3}">Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#${uid}" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#${uid}" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  `;
}
function getMultiCarouselHTML() {
  const uid = "carousel-" + Math.random().toString(36).substr(2, 6);
  const id1 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const id2 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const grid = "grid-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="carousel slide carousel-thumbnail" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-6 col-md-4 mb-3 draggable" id="${grid}a">
            <img src="https://picsum.photos/seed/1/600/400" class="img-fluid rounded w-100" alt="1" id="${id1}a">
          </div>
          <div class="col-6 col-md-4 mb-3 draggable" id="${grid}b">
            <img src="https://picsum.photos/seed/2/600/400" class="img-fluid rounded w-100" alt="2" id="${id1}b">
          </div>
          <div class="col-6 col-md-4 mb-3 draggable  id="${grid}c"d-none d-md-block">
            <img src="https://picsum.photos/seed/3/600/400" class="img-fluid rounded w-100" alt="3" id="${id1}c">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-6 col-md-4 mb-3 draggable" id="${grid}d">
            <img src="https://picsum.photos/seed/4/600/400" class="img-fluid rounded w-100" alt="4" id="${id2}a">
          </div>
          <div class="col-6 col-md-4 mb-3 draggable" id="${grid}e">
            <img src="https://picsum.photos/seed/5/600/400" class="img-fluid rounded w-100" alt="5" id="${id2}b">
          </div>
          <div class="col-6 col-md-4 mb-3 draggable  id="${grid}f"d-none d-md-block">
            <img src="https://picsum.photos/seed/6/600/400" class="img-fluid rounded w-100" alt="6" id="${id2}c">
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-2">
      <button class="btn btn-success btn-sm me-2" data-bs-target="#${uid}" data-bs-slide="prev">
        <i class="bi bi-chevron-left"></i>
      </button>
      <button class="btn btn-success btn-sm" data-bs-target="#${uid}" data-bs-slide="next">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>
  `;
}
function getDoubleCarouselHTML() {
  const uid = "carousel-" + Math.random().toString(36).substr(2, 6);
  const id1 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const id2 = "carousel-" + Math.random().toString(36).substr(2, 6);
  const grid = "grid-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="carousel slide carousel-thumbnail" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          <div class="col-6 col-md-6 mb-3 draggable" id="${grid}a">
            <img src="https://picsum.photos/seed/1/600/400" class="img-fluid rounded w-100" alt="1" id="${id1}a">
          </div>
          <div class="col-6 col-md-6 mb-3 draggable" id="${grid}b">
            <img src="https://picsum.photos/seed/2/600/400" class="img-fluid rounded w-100" alt="2" id="${id1}b">
          </div>
          
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-6 col-md-6 mb-3 draggable" id="${grid}c">
            <img src="https://picsum.photos/seed/4/600/400" class="img-fluid rounded w-100" alt="3" id="${id2}a">
          </div>
          <div class="col-6 col-md-6 mb-3 draggable" id="${grid}d">
            <img src="https://picsum.photos/seed/5/600/400" class="img-fluid rounded w-100" alt="4" id="${id2}b">
          </div>
   
        </div>
      </div>
    </div>
    <div class="text-center mt-2">
      <button class="btn btn-success btn-sm me-2" data-bs-target="#${uid}" data-bs-slide="prev">
        <i class="bi bi-chevron-left"></i>
      </button>
      <button class="btn btn-success btn-sm" data-bs-target="#${uid}" data-bs-slide="next">
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>
  `;
}
function getImageHTML() {
  const uid = "image-" + Math.random().toString(36).substr(2, 6);
  return `
  <img src="https://placehold.co/400x400?text=Image+1" id="${uid}" class="img-fluid draggable" alt="Image ${uid}">
  `;
}
function getImageRoundedHTML() {
  const uid = "image-" + Math.random().toString(36).substr(2, 6);
  return `
  <img src="https://placehold.co/400x400?text=Image+1" id="${uid}" class="d-block w-100" style="border-radius:10px" alt="Image ${uid}">
  `;
}
function getContainerHTML() {
  const uid = "container-" + Math.random().toString(36).substr(2, 6);
  const uid1 = "container-" + Math.random().toString(36).substr(2, 6);
  return `
    <div id="${uid}" class="sembarang container draggable py-2"></div>
  `;
}
function getSectionHTML() {
  const uid = "section-" + Math.random().toString(36).substr(2, 6);
  const uid1 = "section-" + Math.random().toString(36).substr(2, 6);
  return `
    <section id="${uid}" class="sembarang bg-section draggable py-2" style="background:url(https://images.pexels.com/photos/1110504/pexels-photo-1110504.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2); background-size:cover">
    </section>
  `;
}
function getSolidSectionHTML() {
  const uid = "section-" + Math.random().toString(36).substr(2, 6);
  return `
    <section id="${uid}" class="sembarang solid-section draggable"></section>
  `;
}
function getGrid2HTML() {
  const uid = "grid-" + Math.random().toString(36).substr(2, 6);
  const uid1 = "col-" + Math.random().toString(36).substr(2, 6);
  const uid2 = "col-" + Math.random().toString(36).substr(2, 6);
  return `
    <div id="${uid}" class="sembarang row draggable py-2">
      <div class="col-md-6 draggable bg-lb py-2" id="${uid1}"></div>
      <div class="col-md-6 draggable bg-lb py-2" id="${uid2}"></div>
    </div>
  `;
}
function getGrid3HTML() {
  const uid = "grid-" + Math.random().toString(36).substr(2, 6);
  const uid1 = "col-" + Math.random().toString(36).substr(2, 6);
  const uid2 = "col-" + Math.random().toString(36).substr(2, 6);
  const uid3 = "col-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="sembarang row draggable py-2">
    <div class="col-md-4 draggable bg-lb py-2" id="${uid1}"></div>
    <div class="col-md-4 draggable bg-lb py-2" id="${uid2}"></div>
    <div class="col-md-4 draggable bg-lb py-2" id="${uid3}"></div>
  </div>
  `;
}
function getGrid4HTML() {
  const uid = "grid-" + Math.random().toString(36).substr(2, 6);
  const uid1 = "col-" + Math.random().toString(36).substr(2, 6);
  const uid2 = "col-" + Math.random().toString(36).substr(2, 6);
  const uid3 = "col-" + Math.random().toString(36).substr(2, 6);
  const uid4 = "col-" + Math.random().toString(36).substr(2, 6);
  return `
    <div id="${uid}" class="sembarang row draggable py-2">
      <div class="col-md-3 draggable bg-lb py-2" id="${uid1}"></div>
      <div class="col-md-3 draggable bg-lb py-2" id="${uid2}"></div>
      <div class="col-md-3 draggable bg-lb py-2" id="${uid3}"></div>
      <div class="col-md-3 draggable bg-lb py-2" id="${uid4}"></div>
    </div>
  `;
}
function getH1HTML() {
  const uid = "heading-" + Math.random().toString(36).substr(2, 6);
  return `
  <h1 id="${uid}">Heading 1</h1>
  `;
}
function getH2HTML() {
  const uid = "heading-" + Math.random().toString(36).substr(2, 6);
  return `
  <h2 id="${uid}">Heading 2</h2>
  `;
}
function getH3HTML() {
  const uid = "heading-" + Math.random().toString(36).substr(2, 6);
  return `
  <h3 id="${uid}">Heading 3</h3>
  `;
}
function getH4HTML() {
  const uid = "heading-" + Math.random().toString(36).substr(2, 6);
  return `
  <h4 id="${uid}">Heading 4</h4>
  `;
}
function getH5HTML() {
  const uid = "heading-" + Math.random().toString(36).substr(2, 6);
  return `
  <h5 id="${uid}">Heading 5</h5>
  `;
}
function getH6HTML() {
  const uid = "heading-" + Math.random().toString(36).substr(2, 6);
  return `
  <h6 id="${uid}">Heading 6</h6>
  `;
}
function getPHTML() {
  const uid = "paragraph-" + Math.random().toString(36).substr(2, 6);
  return `
  <p id="${uid}">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
  `;
}
function getLinkHTML() {
  const uid = "link-" + Math.random().toString(36).substr(2, 6);
  return `
  <a id="${uid}" href="#" class="draggable">Text Link.</a>
  `;
}
function getIframeHTML() {
  const uid = "iframe-" + Math.random().toString(36).substr(2, 6);
  return `
  <div class="ratio ratio-16x9">
    <iframe id="${uid}" class="peped-30" src="https://www.youtube.com/embed/8A5l1DiPyGo" 
            title="YouTube video" 
            allowfullscreen 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
    </iframe>
  </div>
  `;
}
function getRowHTML() {
  const uid = "r-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="sembarang row draggable">
  </div>
  `;
}
function getisigrid1HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-1 draggable payah-3">
  </div>
  `;
}
function getisigrid2HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-2 draggable payah-3">
  </div>
  `;
}
function getisigrid3HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-3 draggable payah-3">
  </div>
  `;
}
function getisigrid4HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-4 draggable payah-3">
  </div>
  `;
}
function getisigrid5HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-5 draggable payah-3">
  </div>
  `;
}
function getisigrid6HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-6 draggable payah-3">
  </div>
  `;
}
function getisigrid7HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-7 draggable payah-3">
  </div>
  `;
}
function getisigrid8HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-8 draggable payah-3">
  </div>
  `;
}
function getisigrid9HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-9 draggable payah-3">
  </div>
  `;
}
function getisigrid10HTML() {
  const uid = "g-" + Math.random().toString(36).substr(2, 6);
  return `
  <div id="${uid}" class="col-md-10 draggable payah-3">
  </div>
  `;
}

function getHorizontalCardHTML()
{
  const uid = "card-" + Math.random().toString(36).substr(2, 6);
  const img = "img-" + Math.random().toString(36).substr(2, 6);
  const p = "p-" + Math.random().toString(36).substr(2, 6);
  const p1 = "p1-" + Math.random().toString(36).substr(2, 6);
  const h5 = "h-" + Math.random().toString(36).substr(2, 6);
  const card = "card-" + Math.random().toString(36).substr(2, 6);
  const col = "col-" + Math.random().toString(36).substr(2, 6);
  const row = "row-" + Math.random().toString(36).substr(2, 6);
  const span = "span-" + Math.random().toString(36).substr(2, 6);
  return `
  <div class="card mb-3 draggable" id="${uid}">
  <div class="row g-0 draggable" id="${row}1">
    <div class="col-md-4 draggable" id="${col}a">
      <img src="https://placehold.co/400x400?text=Card+1" class="img-fluid rounded-start draggable" alt="..." id="${img}">
    </div>
    <div class="col-md-8 draggable" id="${col}b">
      <div class="card-body draggable" id="${card}">
        <h5 class="card-title draggable" id="${h5}">Card title</h5>
        <p class="card-text draggable" id="${p}">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text draggable" id="${p1}">
        <small class="text-body-secondary draggable" id="${span}">Last updated 3 mins ago</small>
        </p>
      </div>
    </div>
  </div>
</div>
  `;
}
function getVerticalCardHTML()
{
  const uid = "card-" + Math.random().toString(36).substr(2, 6);
  const img = "img-" + Math.random().toString(36).substr(2, 6);
  const p = "p-" + Math.random().toString(36).substr(2, 6);
  const h5 = "h-" + Math.random().toString(36).substr(2, 6);
  const a = "a-" + Math.random().toString(36).substr(2, 6);
  const card = "card-" + Math.random().toString(36).substr(2, 6);


  return `
  <div class="card draggable" id="${uid}">
  <img src="https://placehold.co/400x400?text=Card+2" class="card-img-top draggable" alt="..." id="${img}">
  <div class="card-body draggable" id="${card}">
    <h5 class="card-title draggable" id="${h5}">Card title</h5>
    <p class="card-text draggable" id="${p}">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
    <a href="#" class="btn btn-primary draggable" id="${a}">Go somewhere</a>
  </div>
</div>
  `;
}

function getNavbarHTML()
{
  const nav = "nav-" + Math.random().toString(36).substr(2, 6);
  const naff = "naff-" + Math.random().toString(36).substr(2, 6);
  const uid = "card-" + Math.random().toString(36).substr(2, 6);
  const img = "img-" + Math.random().toString(36).substr(2, 6);
  const p = "p-" + Math.random().toString(36).substr(2, 6);
  const h5 = "h-" + Math.random().toString(36).substr(2, 6);
  const a = "a-" + Math.random().toString(36).substr(2, 6);
  const li = "li-" + Math.random().toString(36).substr(2, 6);

  return `
  <nav class="navbar navbar-expand-lg bg-body-tertiary payah-3" id="${nav}">
    <div class="container-fluid">
      <a class="navbar-brand" href="#" id="${a}">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#${naff}" aria-controls="${naff}" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="${naff}">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li id="${li}7" class="nav-item">
            <a class="nav-link" href="#" id="${a}o">Home</a>
          </li>
          <li id="${li}6" class="nav-item">
            <a class="nav-link" href="#" id="${a}i">Link</a>
          </li>
          <li class="nav-item dropdown" id="${li}5">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="${a}drop">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li id="${li}1"><a class="dropdown-item" href="#" id="${a}t">Action</a></li>
              <li id="${li}2"><a class="dropdown-item" href="#" id="${a}n">Another action</a></li>
              <li id="${li}3"><a class="dropdown-item" href="#" id="${a}m">Something else here</a></li>
            </ul>
          </li>
          <li id="${li}4" class="nav-item">
            <a class="nav-link" id="${a}k">Link</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  `;
}



// document.querySelectorAll(".draggable").forEach(el => {
//   el.addEventListener("dragstart", function(event) { drag(event, false); });
// });
document.addEventListener("dragstart", function (event) {
  const isInside = event.target.closest("#eekditor") !== null;
  drag(event, isInside);
});

      document.addEventListener("click", function(event) {
        let eekditor = document.getElementById("eekditor");

        if (eekditor && eekditor.contains(event.target) && event.target.tagName.toLowerCase() === "img") { 
          let id = event.target.id;
          let src = event.target.src;
          let cname = event.target.className;

            // image_id = id;          
            selected_id = event.target.id;

            let eekditorContent = '<div class="input-group mb-3">';
            eekditorContent+= '<input id="src_edit" class="form-control" value="'+src+'">';
            eekditorContent+= '<div class="input-group-btn"><button type="button" class="btn btn-outline-secondary" id="browse">Choose</button></div>';
            eekditorContent+= '</div>';  

            eekditorContent += class_edit(cname);
            eekditorContent += btn_remove(id);
            eekditorContent += btn_finish(id);
            
            document.getElementById("letak").innerHTML = eekditorContent;

            // Listen for input changes and update the image src dynamically
            document.getElementById("src_edit").addEventListener("input", function() {
              let newSrc = this.value;
              let image = document.getElementById(id);
              if (image) {
                    image.src = newSrc; // Update image src dynamically
                  }
                });
          }
        });
      document.addEventListener("click", function(event) {
        if (event.target.id === "browse") {

          $.ajax({
            type:'POST',
            data:'batas='+4+'&posisi='+0,
            url:'<?php echo base_url("ajax/showmedia") ?>',
            success:function(hasil)
            {
              $('.progress').addClass("hidden");
              setTimeout(function (){
                $(".media-place").html(hasil);
              }, 500);
              $(".form-edit").removeClass("show");
              $(".form-edit").addClass("hidden");
              $(".btn-load-more").attr("posisi","0");
              $("#image-modal").modal('show');
            }
          });
        }
      });
      document.addEventListener("click", function(event) {
        let image_container = document.getElementById("image-modal");


        if (image_container && image_container.contains(event.target) && event.target.tagName.toLowerCase() === "img") { 
          let id = event.target.id;
          let src = event.target.src;


          document.getElementById("src_edit").value = src;
          document.getElementById(selected_id).setAttribute("src", src);

          $("#image-modal").modal("hide");
        }
      });


      document.addEventListener("click", function(event) {
        let allowedHeadings = ["h1", "h2", "h3", "h4", "h5", "h6", "p","span"];
        let tagName = event.target.tagName.toLowerCase();
        let text = event.target.innerHTML.replace("<br>","\n");;



        if (allowedHeadings.includes(tagName)) { 
          id = event.target.id;
          selected_id = event.target.id;
          let cname = event.target.className;
          let eekditor = class_edit(cname);
          eekditor+= text_edit(text);
          eekditor+= btn_remove(id);
          eekditor+= btn_finish(id);

          console.log("eekditor");
          console.log(eekditor);
          document.getElementById("letak").innerHTML = eekditor;
        }
      });
      

      document.addEventListener("click", function(event) {

        let allowedHeadings = ["a"];
        let tagName = event.target.tagName.toLowerCase();
        let eekditorDiv = document.getElementById("eekditor");
        if (eekditorDiv && eekditorDiv.contains(event.target)) {
          let text = "";
          event.target.childNodes.forEach(node => {
            if (node.nodeType === 3 && node.textContent.trim() !== "") {
              text += node.textContent.trim() + " ";
            }
          });
          text = text.trim(); // Bersihkan spasi akhir

          let href = event.target.getAttribute("href");
          let target = event.target.getAttribute("target");

          if (allowedHeadings.includes(tagName)) { 
            event.preventDefault();
            id = event.target.id;
            selected_id = event.target.id;
            let cname = event.target.className;
            let eekditor = class_edit(cname);
            eekditor+= text_edit(text);
            eekditor+= href_edit(href);
            eekditor+= target_edit(target);
            eekditor+= btn_remove(id);
            eekditor+= btn_finish(id);
            document.getElementById("letak").innerHTML = eekditor;
          }
        }
      });


      document.addEventListener("click", function(event) {
        let allowedTags = ["div", "section", "nav"];
        let eekditorDiv = document.getElementById("eekditor");


        if (eekditorDiv && eekditorDiv.contains(event.target)) {
          let tagName = event.target.tagName.toLowerCase();

          if (allowedTags.includes(tagName)) { 
            let id = event.target.id;
            selected_id = event.target.id;
            console.log(selected_id);
            if (event.target.id!=="eekditor") {
              let cname = event.target.className;
              let style = event.target.getAttribute("style");

              let eekditor = class_edit(cname);
              eekditor += style_edit(style);
              eekditor += btn_remove(id);
              eekditor += btn_finish(id);
              document.getElementById("letak").innerHTML = eekditor;
            }
          }
        }
      });
      document.addEventListener("click", function(event) {
        let allowedTags = ["iframe"];
        let eekditorDiv = document.getElementById("eekditor");


        if (eekditorDiv && eekditorDiv.contains(event.target)) {
          let tagName = event.target.tagName.toLowerCase();

          if (allowedTags.includes(tagName)) { 
            let id = event.target.id;
            selected_id = event.target.id;
            console.log(selected_id);
            if (event.target.id!=="eekditor") {
              let cname = event.target.className;
              let style = event.target.getAttribute("style");
              let src = event.target.getAttribute("src");

              let eekditor = class_edit(cname);
              eekditor += style_edit(style);
              eekditor += src_edit(src);
              eekditor += btn_remove(id);
              eekditor += btn_finish(id);
              document.getElementById("letak").innerHTML = eekditor;
            }
          }
        }
      });
      document.addEventListener("click", function(event) {
        if (event.target.id === "finish") {
          document.getElementById("letak").innerHTML = '';
        }
      });
      document.addEventListener("click", function(event) {
        if (event.target.id === "remove" && event.target.hasAttribute("target")) {

          let targetId = event.target.getAttribute("target");
          let targetElement = document.getElementById(targetId);

          if (targetElement) {
            targetElement.remove();
            document.getElementById("letak").innerHTML = '';
          } else {
            console.warn("Element with ID '" + targetId + "' not found!");
          }
        }
      });



      document.addEventListener("keyup", function(event) {
      // di sini ada setan
      if (event.target.id === "class_edit") {
        console.log("id terpilih");
        console.log(selected_id);
        let new_cname = event.target.value;
        let element = document.getElementById(selected_id);
        if (element) {
                element.className = new_cname; // Set class
                console.log("Updated class:", element.className); // Get class
              }
            }
          });
      document.addEventListener("keyup", function(event) {
        if (event.target.id === "style_edit") {
          let new_style = event.target.value; // Nilai dari input teks
          let element = document.getElementById(selected_id); // Elemen yang sedang dipilih

          if (element) {
            element.setAttribute("style", new_style); // ⬅️ Ini yang benar
            console.log("Updated style:", element.getAttribute("style"));
          }
        }
      });
      document.addEventListener("keyup", function(event) {
        if (event.target.id === "src_edit") {

          let new_src = event.target.value; // Nilai dari input teks
          let element = document.getElementById(selected_id); // Elemen yang sedang dipilih

          if (element) {
            element.setAttribute("src", new_src); // ⬅️ Ini yang benar
            console.log("Updated src:", element.getAttribute("src"));
          }
        }
      });
      document.addEventListener("keyup", function(event) {
        if (event.target.id === "text_edit") {
            let new_text = event.target.value.replace(/\n/g, "<br>"); // Preserve new lines
            let element = document.getElementById(id);
            if (element) {
                element.innerHTML = new_text; // Update content
              }
            }
          });

      document.addEventListener("keyup", function(event) {
        if (event.target.id === "href_edit") {
          let new_href = event.target.value;
          let element = document.getElementById(id);
          if (element) {
            element.setAttribute("href", new_href);
          }
        }
      });
      document.addEventListener("change", function(event) {
        if (event.target.id === "target_edit") {
          let new_target = event.target.value;
          let element = document.getElementById(id);
          if (element) {
            element.setAttribute("target", new_target);
          }
        }
      });


      function btn_remove(id){
        return `<button type='button' id='remove' class='btn btn-danger btn-sm' target='${id}'>remove</button> `;
      }
      function btn_finish(id){
        return `<button type='button' id='finish' class='btn btn-success btn-sm' target='${id}'>finish</button> `;
      }
      function class_edit(cname){
        let isi = '<label>Class</label>';
        isi+= `<input type='text' id='class_edit' class='form-control' value='${cname}'><br>`;
        return isi;
      }
      function style_edit(style){
        let isi = '<label>Style</label>';
        isi+= `<input type='text' id='style_edit' class='form-control' value='${style}'><br>`;
        return isi;
      }
      function src_edit(src){
        let isi = '<label>src</label>';
        isi+= `<input type='text' id='src_edit' class='form-control' value='${src}'><br>`;
        return isi;
      }
      function text_edit(text){
        let isi = '<label>Text</label>';
        isi+= `<textarea id='text_edit' rows='5' class='form-control'>${text}</textarea><br>`;
        return isi;
      }
      function href_edit(href){
        let isi = '<label>Href</label>';
        isi+= `<input type='text' id='href_edit' class='form-control' value='${href}'><br>`;
        return isi;
      }
      function target_edit(target) {
        let isi = '<label>Target</label>';
        isi += `<select class="form-control" id="target_edit">`;
        isi += `<option value="" ${target === "" ? "selected" : ""}>select</option>`;
        isi += `<option value="_self" ${target === "_self" ? "selected" : ""}>Same Tab</option>`;
        isi += `<option value="_blank" ${target === "_blank" ? "selected" : ""}>New Tab</option>`;
        isi += `</select><br>`;
        return isi;
      }

    </script>


