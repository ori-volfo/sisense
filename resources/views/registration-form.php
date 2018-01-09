@section('registration-form')
    <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Registration</h4>
                    </div>
                    <div class="modal-body">
                        <form id="registration-form">
                            <div class="form-group">
                                <label for="first">First Name:</label>
                                <input type="text" class="form-control" name="first" id="first">
                                <div class="help-block with-errors">Please provide a valid name, consisted of letters only.</div>
                            </div>
                            <div class="form-group">
                                <label for="last">Last Name:</label>
                                <input type="text" class="form-control" name="last" id="last">
                                <div class="help-block with-errors">Please provide a valid name, consisted of letters only.</div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email">
                                <div class="help-block with-errors">Please provide a valid Email.</div>
                            </div>
                            <div class="form-group">
                                <label for="timeframe">For how long?</label>
                                <select class="form-control" name="timeframe" id="timeframe">
                                    <option disabled selected>Please select a timeframe:</option>
                                    <option value="1">Over 6 months</option>
                                    <option value="2">3 - 6 months</option>
                                    <option value="3">Less than 3 months</option>
                                </select>
                                <div class="help-block with-errors">Please choose a timeframe.</div>
                            </div>
                            <div class="form-submit">
                                <button class="btn" id="submit" disabled>Start Now!</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="notify successbox">
                    <h1>Success!</h1>
                    <span class="alerticon"><img src="../images/check.png" alt="checkmark" /></span>
                    <p>Thank you for applying!</p>
                    <p>Our representative will contact you shortly. </p>
                    <div class="form-submit">
                        <button type="button" class="btn" data-dismiss="modal">OK</button>
                    </div>
                </div>
                <div class="notify errorbox">
                    <h1>Error!</h1>
                    <span class="alerticon"><img src="../images/error.png" alt="error" /></span>
                    <div id="emailErrMsg">
                        <p>Email already exists!</p>
                    </div>
                    <div id="generalErrMsg">

                    </div>
                    <div class="form-submit">
                        <button type="button" class="btn" id="backBtn">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Set up Laravels validation token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@show