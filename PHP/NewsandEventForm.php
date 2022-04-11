<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsandEventForm</title>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="../Style/Ebook_Modal.css"> -->
    <!-- <link rel="stylesheet" href="../Style/Ebook.css"> -->
    <link rel="stylesheet" href="../Style/NewsandEventForm.css">
</head>

<body>
    <div>
        <a href="#NEF" class="nav-link at-float" data-toggle="modal" id="at-menu-share">
            <i class="fa fa-plus my-float"></i></a>
    </div>
    <!-- News and Event Form Modal -->
    <div class="modal fade" id="NEF">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content form-wrapper">
                <div class="close-box" data-dismiss="modal">
                    <i class="fa fa-times fa-2x"></i>
                </div>
                <div class="container-fluid mt-5">
                    <!-- form tag -->
                    <form action="" method="post" id="NewsandEventForm" enctype="multipart/form-data">
                        <div class="form-group text-center pb-2">
                            <h4>News and Event Form</h4>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="name"> Title</label>
                                <input type="text" id="title" class="form-control" placeholder="Title" name="title" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="text">Description</label>
                                <textarea rows="3" cols="50" id="description" class="form-control mb-1" placeholder="Description" name="description" style="resize:none"></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="text">Venue</label>
                                <input type="text" id="venue" class="form-control mb-1" placeholder="Venue" name="Venue">
                            </div>
                        </div>

                        <!-- This div for event date and time -->

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="text">Start Date & Time</label>
                                <input type="datetime-local" id="startDT" class="form-control" title="Start Date & Time." onchange="myFunction()" min="" max="" value="" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="text">End Date & Time</label>
                                <input type="datetime-local" id="endDT" class="form-control" title="End Date & Time." min="" max="" value="" required disabled>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for="name">Event Link</label>
                                <input type="url" id="eventlink" class="form-control" placeholder="Event Link(https://www.xyz.com)" name="Event Link">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col">
                                <label for='file_upload' style="display:block">Upload Photo</label>
                                <button type="button" class="btn btn-dark form-control" onclick="document.getElementById('file_upload').click()" id="file_btn">Select image</button>
                                <input type="file" name="" id="file_upload" accept="image/*" style="display:none;" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-info form-control" type="submit" name="submit"> Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var tzoffset = (new Date()).getTimezoneOffset() * 60000;
        var localISOTime = (new Date(Date.now() - tzoffset)).toISOString().slice(0, -8);

        document.getElementById('startDT').setAttribute("min", localISOTime);
        document.getElementById('startDT').setAttribute("value", localISOTime);
        document.getElementById('endDT').setAttribute("value", localISOTime);

        function myFunction() {
            var myval = document.getElementById('startDT').value;
            document.getElementById('endDT').disabled = false;
            document.getElementById('endDT').setAttribute("min", myval);
            document.getElementById('endDT').setAttribute("value", myval);
        }
    </script>
</body>
</html>