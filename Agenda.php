<section class="col-lg-5 connectedSortable">
  <div class="box box-primary">
    <div class="box-header">
      <i class="ion ion-clipboard"></i>
      <h3 class="box-title">Rendez-vous du Jour</h3>
    <?php 
            $today = date("Ymd"); 
            print "<iframe src=\"https:\/\/calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=DAY&amp;dates=$today/$today&amp;height=300&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=anaclaudiaferreirabasilio%40gmail.com&amp;color=%2328754E&amp;ctz=Europe%2FParis\" style=\"border-width:0\" width=\"375\" height=\"800\" frameborder=\"0\" scrolling=\"no\"></iframe>"; 
    ?>
    </div><!-- /.box-body -->
  </div><!-- /.box -->
</section><!-- right col -->