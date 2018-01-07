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
                                <label for="first">Last Name:</label>
                                <input type="text" class="form-control" name="last" id="last">
                                <div class="help-block with-errors">Please provide a valid name, consisted of letters only.</div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email">
                                <div class="help-block with-errors">Please provide a valid Email.</div>
                            </div>
                            <div class="form-group">
                                <label for="email">For how long?</label>
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

            </div>
        </div>
    </div>
@show