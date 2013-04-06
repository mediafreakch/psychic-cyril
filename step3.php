<?php
require ('inc/layout.php');
$Layout->title='Selling';
$Layout->start();
?>

<h2>Set pricing and time for your listing</h2>

<form>
    <fieldset>
        <div class="row-fluid">
            <div class="span12">
                <label for="auctionType">
                    Type of Auction
                </label>
                <label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    List as an auction - Allows people to bid on your product
                </label>
                <label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    List as a fixed price offer - People can buy it, or not
                </label>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <label for="auctionStartPrice">
                    Auction start price
                </label>
                <div class="row-fluid">
                    <div class="span3">
                        <div class="input-prepend">
                            <span class="add-on">CHF</span>
                            <input class="span10" id="inputStartPrice" type="text" placeholder="50.00">
                        </div>
                    </div>
                    <div class="span9">
                        <a href="#" class="btn btn-link">Add a buy now option</a><small class="label label-warning">+ CHF 1.00</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <label for="auctionIncrementPrice">
                    Increment price
                </label>
                <div class="input-prepend">
                    <span class="add-on">CHF</span>
                    <input class="span10" id="inputIncrementPrice" type="text" placeholder="1.00">
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <label for="paymentConditions">
                    Accepted Payment Conditions
                </label>
                <label class="checkbox inline">
                    <input type="checkbox">
                    In Advance
                </label>
                <label class="checkbox inline">
                    <input type="checkbox">
                    At Pickup
                </label>
                <label class="checkbox inline">
                    <input type="checkbox">
                    After Receipt
                </label>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <label for="paymentConditions">
                    Accepted Payment Methods
                </label>
                <label class="checkbox inline">
                    <input type="checkbox">
                    RicardoPay
                </label>
                <label class="checkbox inline">
                    <input type="checkbox">
                    Bank / Post
                </label>
                <label class="checkbox inline">
                    <input type="checkbox">
                    Cash
                </label>
            </div>
        </div>
        <a href="#" class="btn btn-link">Add additional payment notes</a>
    </fieldset>
    <fieldset>
        <div class="row-fluid">
            <div class="span12">
                <label for="StartTimeAndDuration">
                    Listing start time and duration
                </label>
                <div class="row-fluid">
                    <div class="input-append">
                        <input class="span6" id="appendedDropdownButton" type="text" value="immediately">
                        <div class="btn-group">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-calendar"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                ...
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <label for="reactivationOption">
                    Reactivation
                </label>
                <select class="span1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                </select>
                <span class="help-inline">reactivate</span>
            </div>
        </div>
    </fieldset>
</form>

<div class="form-actions">
    <a href="step4.php" class="btn btn-primary">Forward to set Shipping Conditions</a><span class="separator muted"> | </span><a href="#" class="btn btn-link">Back to describe your product</a>
</div>
<?php $Layout->end(); ?>