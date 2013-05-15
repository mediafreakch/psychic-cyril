<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Wie erreicht der verkaufte Artikel den Käufer?</h2>

<fieldset class="section well">
    <label for="inputShippingMethod"> Versandarten <i class="icon-info-sign" data-toggle="tooltip" data-placement="right" title="Wenn Sie „Kostenloser Versand“ wählen, wird in der Spalte „Versand“ in den Suchergebnissen  und auf Ihrer Artikelseite „kostenlos“ angezeigt. Es fallen keine Porto-, Versicherungs-, Verpackungs- und Bearbeitungsgebühren an."></i> </label>
    <div class="row-fluid shipping-element">
        <div class="span12">
            
            <form action="#" method="post" class="form-inline">

                <a href="#" class="delete-additional-shipping hide" data-placement="top" data-toggle="tooltip" data-original-title="Lieferoption entfernen"><i class="icon-remove"></i></a>
                <select class="inputShippingMethod" name="inputShippingMethod">
                    <option selected="selected">Abholung</option>
                    <option data-value="1.00">Brief A-Post</option>
                    <option data-value="0.80">Brief B-Post</option>
                    <option data-value="10.00">Packet A-Post</option>
                    <option data-value="5.00">Packet B-Post</option>
                    <option>Kurier</option>
                </select>
                <div class="input-prepend">
                    <span class="add-on">CHF</span>
                    <input class="inputShippingCosts" name="inputShippingCosts" type="text" value="0.00" class="span10">
                </div>
                <label class="checkbox inline">
                    <input type="checkbox">
                    Gratis anbieten </label>
            </form>
        </div>
    </div>
    <div class="row-fluid">
        <button class="btn btn-small btn-rounded add-additional-shipping">
            <i class="icon-plus"></i>
        </button>
    </div>
    <div class="section">
        <a class="btn btn-link" data-toggle="collapse" data-target="#additional-shipping-notes">Zusätzliche Angaben zum Versand</a>
        <div class="row-fluid collapse" id="additional-shipping-notes">
            <textarea class="span8" rows="3" placeholder="Notieren Sie Bemerkungen zum Versand"></textarea>
        </div>
    </div>
</fieldset>
<fieldset class="section well">
    <div class="row-fluid">
        <div class="span12">
            <label for="productAvailability"> Verfügbarkeit des Artikels </label>

            <select>
                <option>sofort lieferbar</option>
                <option>lieferbar in 1 - 5 days</option>
                <option>lieferbar in 6 - 10 days</option>
                <option>lieferbar in 11 - 14 days</option>
                <option>lieferbar in 15 - 20 days</option>
                <option>lieferbar in 60 days</option>
            </select>
        </div>
    </div>
</fieldset>

<div class="form-actions">
    <a href="step5.php" class="btn btn-primary pull-right">Weiter zu "Promotions Optionen"</a>
</div>
<?php $Layout -> end(); ?>