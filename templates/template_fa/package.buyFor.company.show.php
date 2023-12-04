
<script type="text/javascript" language="javascript" class="init">
    $(document).ready(function()
    {
        $('.menu-hidden').removeClass('hidden');
        $('.menu-hidden .package-child').addClass('active');
        var dataTable = $('#example');
        var oTable = dataTable.DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "<?=RELA_DIR?>package.php?action=searchBuyPackageForCompany&ajax=1"
        } );

        // Apply the search
        oTable.columns().every( function ()
        {
            var that = this;
            $( 'input', this.footer() ).on( 'keyup change', function () {
                that.search( this.value ).draw();
            } );
        } );
    } );
</script>
<div class="content active">
   <!-- <div class="content-header">
        <h2 class="content-title"><i class="fa fa-user"></i><?php /*echo PACKAGE_55; */?></h2>
    </div>--><!--/content-header -->
    <div class="content-control">
        <!--control-nav-->
        <ul class="control-nav pull-left">
            <li>
                <a class="text-20">buy Package</a>
            </li>
        </ul><!--/control-nav-->
    </div>
    <div class="content-body">
        <div id="panel-tablesorter" class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo PACKAGE_55; ?></h3>
                <div class="panel-actions">
                    <button data-collapse="#panel-tablesorter" title="" class="btn-panel" data-original-title="<?php echo COLLAPSE; ?>">
                        <i class="fa fa-caret-down text-midnight text-18"></i>
                    </button>
                </div><!-- /panel-actions -->
            </div><!-- /panel-heading -->
            <!--panel-body-->
            <div class="panel-body">

                <?php if($msg!=null)
                { ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 alert alert-success margin-bottom">
                        <?= $msg ?>
                    </div>
                <?php
                }
                ?>
                <!--form-->
                <form method="post" action="<?=RELA_DIR.'package.php?action=changePackageStatus';?>" name="action" id="action">
                    <div class="content-body">
                        <!--     <div class="pull-left margin-bottom">

                            <a href="<?php /*echo RELA_DIR.'package.php?action=addPackage'*/?>" class="btn btn-primary btn-sm btn-icon text-13"><i class="fa fa-plus"></i><?php echo ADD; ?></a>

                            <input type="submit" name="active" id="action" class="btn btn btn-success btn-sm text-13" value="<?php echo ENABLE_01; ?>">

                            <input type="submit" name="inactive" id="action1" class="btn btn-danger btn-sm  text-13" value="<?php echo DISABLED_01; ?>">
                        </div>-->
                        <div class="pull-left margin-bottom"><a href="<?php echo RELA_DIR.'basket.php?action=showBasket'?>" class="btn btn-icon btn-warning">
                                <i class="fa fa-shopping-cart">
                                </i><?php echo PACKAGE_56?>
                                </a></div>
                        <div class="row smallSpace"></div>
                        <div class="pull-left margin-right">
                            <label class="pull-left" for="checkAll"><?php echo TRASH_02?>
                                <input type="checkbox" id="checkAll" name="checkAll">
                            </label>
                        </div>

                        <table id="example" class="companyTable table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th><?php echo PACKAGE_57?></th>
                                <th><?php echo PACKAGE_58?></th>
                                <th><?php echo PACKAGE_59?></th>
                                <th><?php echo PACKAGE_60?></th>
                                <th><?php echo PACKAGE_61?></th>
                                <th><?php echo PACKAGE_62?></th>
                                <th><?php echo PACKAGE_63?></th>
                                <th><?php echo PACKAGE_64?></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th><input type="text" name="search_30" value="" class="search_init form-control" /></th>
                                <th><input type="text" name="search_30" value="" class="search_init form-control" /></th>
                                <th><input type="text" name="search_30" value="" class="search_init form-control" /></th>
                                <th><input type="text" name="search_30" value="" class="search_init form-control" /></th>
                                <th><input type="text" name="search_30" value="" class="search_init form-control" /></th>
                                <th><input type="text" name="search_30" value="" class="search_init form-control" /></th>
                                <th><input type="text" name="search_30" value="" class="search_init form-control" /></th>
                                <th><input type="text" name="search_30" value="" class="search_init form-control" /></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>

                    <div class="row smallSpace"></div>

                </form>
            </div>
            <!--/table-responsive-->
        </div>
    </div>
</div><!--/content -->


