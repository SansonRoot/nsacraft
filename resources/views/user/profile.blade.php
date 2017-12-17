@extends('master.layouts')

@section('title')
 example

@stop


@section('content')
    <div class="container">
        <form class="form-horizontal">

            <div class="form-group form-group-sm">
                <!-- left column -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="new_name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="new_name" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_subname" class="col-sm-2 control-label">Subname</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="new_subname" placeholder="">
                        </div>
                    </div>


                    <p class="lead">Ship to address</p>
                    <div class="form-group">
                        <label for="new_address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="new_address" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_addresssub" class="col-sm-2 control-label">Address 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="new_addresssub" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_zip" class="col-sm-2 control-label">Zip</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="new_zip" placeholder="">
                        </div>
                        <div class="col-sm-7">
                            <label for="new_zip_detail" class="sr-only">City, State Country</label>
                            <input type="text" class="form-control" id="new_zip_detail" placeholder="City, State Country" disabled="">
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="new_phone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="phone" class="form-control" id="new_phone" placeholder="">
                        </div>
                    </div>


                    <p class="lead">Bill to address</p>
                    <div class="form-group">
                        <label for="new_qbnameid" class="col-sm-2 control-label">QBNAMEID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="new_qbnameid" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_billadditional" class="col-sm-2 control-label">Name (if other)</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="new_billadditional" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_billto_addr" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="new_billto_addr" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_billto_addrsub" class="col-sm-2 control-label">Address 2</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="new_billto_addsubr" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_billto_zip" class="col-sm-2 control-label">Zip</label>
                        <div class="col-sm-3">
                            <label for="new_billto_zip" class="sr-only">City, State Country</label>
                            <input type="text" class="form-control" id="new_billto_zip" placeholder="">
                        </div>
                        <div class="col-sm-7">
                            <label for="new_billto_zip_detail" class="sr-only">City, State Country</label>
                            <input type="text" class="form-control" id="new_billto_zip_detail" placeholder="City, State Country" disabled="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new_www" class="col-sm-2 control-label">Website</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="new_www" placeholder="">
                        </div>
                    </div>
                </div>





                <!-- right column -->
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="new_company_identity" class="col-sm-2 control-label">Company Identity</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="new_company_identity">
                                <option value="1">Default</option>
                                <option value="2">Company 2</option>
                                <option value="3">Company 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new_bol_require" class="col-sm-2 control-label">BOL Required</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="new_bol_require">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="new_pod_require" class="col-sm-2 control-label">POD Required</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="new_pod_require">
                                <option value="0">No</option>
                                <option value="1">Yes</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="new_discount" class="col-sm-2 control-label">Discount</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="number" class="form-control" id="new_discount" placeholder="0.00">
                                <span class="input-group-addon">%</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new_credit" class="col-sm-2 control-label">Credit Limit</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="number" class="form-control" id="new_credit" placeholder="0.00">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="new_terms" class="col-sm-2 control-label">Terms</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="new_terms">
                                <option value="Net 15">Net 15</option>
                                <option value="Net 30">Net 30</option>
                                <option value="Due on receipt">Due on receipt</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-group-sm">
                        <label for="new_comcode" class="col-sm-2 control-label">Sales Rep</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="new_comcode">
                                <option value="0">N/A</option>
                                <option value="1">Alice</option>
                                <option value="2">Bob</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="new_active" class="col-sm-2 control-label">Active</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="new_active">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>





                    <!--      [x] POD Required
                <div class="form-group">
                  <label>
                    <input type="checkbox" class="" value="" id="new_pod_require">
                    POD Required
                  </label>
                </div>
                -->

                    <!--  BOL Required     [x]
                <div class="form-group">
                  <label for="new_bol_require" class="col-sm-2 control-label">BOL Required</label>
                  <div class="  col-sm-1">
                    <input type="checkbox" class="" id="new_bol_require" placeholder="">
                  </div>
                </div>-->


                    <!--  BOL Required     [x]
                <div class="form-group">
                  <label for="new_bol_require" class="col-sm-2 control-label">BOL Required</label>
                  <div class="col-sm-1">
                    <input type="checkbox" class="com-sm-1 form-controlall" id="new_bol_require" placeholder="">
                  </div>
                </div>-->


                    <!--         [x] BOL Required
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> BOL Required
                      </label>
                    </div>
                  </div>
                </div>-->



                    <!-- Begin contact information -->
                    <div id="tabs">
                        <ul>
                            <li><a href="#normalcontact">Normal Contact</a></li>
                            <li><a href="#billcontact">Bill Contact</a></li>
                            <li><a href="#testcontact">Test Contact</a></li>
                        </ul>

                        <!-- Normal Contact Begin -->
                        <div id="normalcontact">
                            <div class="form-group">
                                <label for="new_contact" class="col-sm-1 control-label">Name</label>
                                <div class="col-sm-11">
                                    <input type="text" class="form-control" id="new_contact" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="new_phone" class="col-sm-1 control-label">Phone</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="new_phone" placeholder="">
                                </div>
                                <label for="new_otherphone" class="col-sm-1 control-label">Alt Phone</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="new_otherphone" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="new_cellphone" class="col-sm-1 control-label">Cell</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="new_cellphone" placeholder="">
                                </div>
                                <label for="new_fax" class="col-sm-1 control-label">Fax</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" id="new_fax" placeholder="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="new_email" class="col-sm-1 control-label">Email</label>
                                <div class="col-sm-11">
                                    <input type="text" class="form-control" id="new_email" placeholder="">
                                </div>
                            </div>
                        </div>
                        <!-- Normal Contact End -->

                        <!-- Bill Contact Begin -->
                        <div id="billcontact">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <span class="label label-default">Name</span>
                                    <input type="text" class="form-control" id="new_billcontact" placeholder="">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-6">
                                    <span class="label label-default">Phone</span>
                                    <input type="text" class="form-control" id="new_billphone" placeholder="">
                                </div>
                                <div class="col-sm-6">
                                    <span class="label label-default">Alt Phone</span>
                                    <input type="text" class="form-control" id="new_billotherphone" placeholder="">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-6">
                                    <span class="label label-default">Cell</span>
                                    <input type="text" class="form-control" id="new_billcellphone" placeholder="">
                                </div>
                                <div class="col-sm-6">
                                    <span class="label label-default">Fax</span>
                                    <input type="text" class="form-control" id="new_billfax" placeholder="">
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12">
                                    <span class="label label-default">Email</span>
                                    <input type="text" class="form-control" id="new_billemail" placeholder="">
                                </div>
                            </div>
                        </div>
                        <!-- Bill Contact End -->



                        <!-- Test Contact Begin -->
                        <div id="testcontact">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Name</span>
                                        <input type="text" class="form-control" id="new_testcontact" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Phone</span>
                                        <input type="text" class="form-control" id="new_testphone" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon"><abbr title="Alternate Phone">Alt</abbr></span>
                                        <input type="text" class="form-control" id="new_testotherphone" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Cell</span>
                                        <input type="text" class="form-control" id="new_testcellphone" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">Fax</span>
                                        <input type="text" class="form-control" id="new_testfax" placeholder="">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12">
                                    <div class="input-group">
                                        <span class="input-group-addon">Email</span>
                                        <input type="text" class="form-control" id="new_testemail" placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Test Contact End -->


                    </div>
                    <!-- End contact information -->





                </div>
            </div>


            <!-- End main input boxes, starting a new "row" -->

            <div class="form-group form-group-sm">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="new_comments" class="col-sm-1 control-label">Comments</label>
                        <div class="col-sm-11">
                            <textarea class="form-control" rows="3" id="new_comments"></textarea>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Submit data -->
            <div class="form-group form-group-sm">
                <div class="col-sm-2 col-sm-offset-5">
                    <button type="button" class="btn btn-default" id="new_submit" disabled="disabled">Create Record</button>
                </div>
            </div>


        </form>
    </div> <!-- End container div -->




    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#newConsigneeModal">Create New Consignee</button>



@stop