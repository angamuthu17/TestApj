
<main role="main">

    <div class="container mt-5">

        <div class="jumbotron jumbotron-fluid text-border-big">
            <div class="container">
                <h3 class="font-weight-bold font-italic">#FreeTraining</h3>
                <p class="lead">With aim to provide free education to students, we have initiated this idea!</p>
            </div>
        </div>

        <div id="successAlert" class="alert alert-success" role="alert" style="display:none;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading"><i class="far fa-check-circle mr-2 text-success" aria-hidden="true"></i>Done!</h4>
            <p>Thank you for your interest! We will notify you via e-mail when the next online batch starts. Classes for current batch has started from May 2020 to September 2020.</p>
        </div>
        <div id="errorAlert" class="alert alert-danger" role="alert" style="display:none;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading"><i class="fas fa-exclamation mr-2 text-danger" aria-hidden="true"></i>Uh-oh!</h4>
            <p>Sorry, there seems to be an issue in registering your application. Please try after sometime.</p>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <h5 class="card-title">Students free weekend online classes registration</h5>
            </div>
            <div class="card-body">
                <form id="contactForm" class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="studentFirstName">First name <span class="text-danger small">*</span></label>
                            <input type="text" class="form-control" id="studentFirstName" name="studentFirstName" placeholder="First name" pattern="^[A-Za-z ]+$" required />
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="studentLastName">Last name <span class="text-muted small">(optional)</span></label>
                            <input type="text" class="form-control" id="studentLastName" name="studentLastName" placeholder="Last name" pattern="^[A-Za-z ]+$"/>
                            <div class="invalid-feedback">
                                Please enter a valid last name.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="studentEmail">Email address <span class="text-danger small">*</span></label>
                            <input type="email" class="form-control" id="studentEmail" name="studentEmail" placeholder="name@example.com" required>
                            <div class="invalid-feedback">
                                Please enter a valid e-mail address.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="studentMobile">Mobile number <span class="text-muted small">(optional, but helps to reach out to you faster)</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="phonePrepend">+91</span>
                                </div>
                                <input type="" class="form-control" id="studentMobile" name="studentMobile" placeholder="987XXXXXXX" aria-describedby="phonePrepend" pattern="[0-9]{10}">
                                <div class="invalid-feedback">
                                    Please enter a valid mobile number.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="studentAge">Age <span class="text-danger small">*</span></label>
                            <input type="text" class="form-control" id="studentAge" name="studentAge" placeholder="20" required pattern="[0-9]{1,2}">
                            <div class="invalid-feedback">
                                Please enter your age.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="studentLocation">Location <span class="text-danger small">*</span></label>
                            <input type="text" class="form-control" id="studentLocation" name="studentLocation" placeholder="Madurai" required pattern="^[A-Za-z ]+$">
                            <div class="invalid-feedback">
                                Please enter your place. For example, <span class="font-weight-bold font-italic"> Madurai</span>.
                            </div>
                        </div>
                    </div>

                    <hr/>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="studentEducation">Educational qualification <span class="text-danger small">*</span></label>
                            <select class="form-control" id="studentEducation" name="studentEducation" required>
                                <option value="">-- Select --</option>
                                <option value="10">10 th</option>
                                <option value="11">11 th</option>
                                <option value="12">12 th</option>
                                <option value="ug">UG</option>
                                <option value="pg">PG</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select your educational qualification.
                            </div>
                        </div>
                        <div class="col-md-9 mb-3">
                            <label for="studentInstitutionName">School / College name <span class="text-danger small">*</span></label>
                            <input type="text" class="form-control" id="studentInstitutionName" name="studentInstitutionName" placeholder="School / College name" required >
                            <div class="invalid-feedback">
                                Please enter your school / college name where you study.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="studentAvailability">Availability on saturday/sunday? <span class="text-danger small">*</span></label>
                            <select class="form-control" id="studentAvailability" name="studentAvailability" required>
                                <option value="">-- Select --</option>
                                <option value="Y">Yes, I am available.</option>
                                <option value="N">N0, I am not available.</option>   
                            </select>
                            <div class="invalid-feedback">
                                Please select your availability.
                            </div>
                        </div>
                        <div class="col-md-9 mb-3">
                            <label for="studentsInterest">Subjects interested <span class="text-danger small">*</span></label>
                            <input type="text" class="form-control" id="studentsInterest" name="studentsInterest" placeholder="Python, English, Java" required >
                            <div class="invalid-feedback">
                                Please enter your interested subjects.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label for="referalSource">Referal Source <span class="text-danger small">*</span></label>
                            <input type="text" class="form-control" id="referalSource" name="referalSource" placeholder="Ex: Facebook or My friend Steve" required >
                            <div class="invalid-feedback">
                                Please enter the detail on how you came to know about the program. <br/><i>Ex: Facebook, Through a friend Steve, Online browsing.</i>
                            </div>
                        </div>
                        <div class="col-md-9 mb-3">

                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" value="Y" id="declaration" name="declaration" required>
                                <label class="form-check-label text-justify" for="declaration">
                                    I hereby declare that all information entered for registeration is complete, true and correct in all aspect.
                                </label>
                                <div class="invalid-feedback">
                                    You need to complete the declaration.
                                </div>
                            </div>
                            <div class="form-check mt-1">
                                <input class="form-check-input" type="checkbox" value="Y" id="privacyNote" name="privacyNote" required>
                                <label class="form-check-label text-justify" for="privacyNote">
                                    I confirm that I have read and agree to A Purposeful journey's <a href="#" data-toggle="modal" data-target="#privacyModal">Privacy Policy &amp; Terms of Service</a>.
                                </label>
                                <div class="invalid-feedback">
                                    Please read and agree to the Privacy Policy &amp; Terms of Service to proceed further.
                                </div>
                            </div>

                        </div>
                    </div>

                    <hr/>

                    <div class="form-row mt-4">
                        <div class="col-md mb-3">
                            <button id="submitButton" type="submit" class="btn btn-outline-info w-100" onClick="submitRegistration(event);">
                                <span id="btn-txt-submit">Submit</span>
                                <span id="btn-txt-loadSubmit">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Registering...
                                </span>
                            </button>
                        </div>
                        <div class="col-md mb-3">
                            <button type="button" class="btn btn-outline-secondary w-100" onClick="resetForm();">Reset</button>
                        </div>
                    </div>
                    <span class="text-danger small">* Required field</span>
                </form>  
            </div>
        </div>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Privacy Policy &amp; Terms of Service</h6>
            </div>
            <div class="modal-body">
                <h6>Privacy Policy</h6>
                <p class="text-justify small">
                By accessing the website at http://www.joinapj.com, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.
                </p>
                <h6>Usage of Personal Information</h6>
                <p class="text-justify small">
                Any data collected by A Purposeful Journey will not be sold or shared to anyother third party. All information's are stored only for contacting you and to provide you update regularly on our programs.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-outline-secondary mx-auto" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

</main>


<script>
    
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            //hide
            $('#successAlert').hide();
            $('#errorAlert').hide();
            $('#btn-txt-loadSubmit').hide();

        }, false);
    })();
      
    function submitRegistration(event)
    {
        $('#successAlert').hide();
        $('#errorAlert').hide();
        disableSubmit();

        // Check validity
        var form = document.getElementsByClassName('needs-validation')[0];
        if (form.checkValidity() === false) 
        {
            event.preventDefault();
            event.stopPropagation();

            form.classList.add('was-validated');
            enableSubmit();
            return false;
        }

        event.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lcl5akZAAAAABwN3d-P6ClqwvlNTB4diNV9piel', {action: 'submit_fefa_register'}).then(function(token) {
            
            $.ajax({
                type: 'post',
                url: 'doRegister',
                data: $('.needs-validation').serialize() + '&token=' + token,
                success: function (obj) {
                    console.log(obj);
                    $('#successAlert').show();
                    enableSubmit();
                    $('html, body').animate({
                        scrollTop: $(".jumbotron").offset().top
                    }, 1000);
                },
                error: function (obj) {
                    console.log(obj);
                    $('#errorAlert').show();
                    enableSubmit();
                    $('html, body').animate({
                        scrollTop: $(".jumbotron").offset().top
                    }, 1000);
                }
            });
            
          });
        });
        
        return false;
    }

    function enableSubmit()
    {
        $('#submitButton').removeAttr('disabled');
        $('#btn-txt-loadSubmit').hide();
        $('#btn-txt-submit').show();
    }

    function disableSubmit()
    {
        $('#submitButton').attr('disabled','disabled');
        $('#btn-txt-submit').hide();
        $('#btn-txt-loadSubmit').show();
    }

    function resetForm()
    {
        $('#successAlert').hide();
        $('#errorAlert').hide();
        $('#btn-txt-loadSubmit').hide();
        var form = document.getElementsByClassName('needs-validation')[0];
        form.reset();
        form.classList.remove('was-validated');
    }

</script>