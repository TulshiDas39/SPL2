<?php
class tt extends CI_Controller
{
    public function index()
    {

        $this->load->view('user/Text');

    }
<?php
$query= $this->db
->where('status',1)
->order_by('date','desc')
->get('notification');
if($query->num_rows()>0) {
?>
    <span class="badge badge-light" id="notifction_count"><?php echo $query->num_rows()?></span>
    <?php
}
?>
</span></span></button>
<div class="dropdown-menu" aria-labelledby="notification_button" id="menu_div">

    <?php
    $query= $this->db
        ->order_by('date','desc')
        ->get('notification');
    if($query->num_rows()>0) {
        foreach ($query->result_array() as $q) {
            ?>

            <li><a style="
                <?php
                if($q['status']==1)
                {
                    echo "font-weight:bold";
                }
                ?>

                    "class="dropdown-item" href="<?php echo base_url() ?>View/relate?id=<?php echo $q['notification_id']; ?>">
                    <small><i><?php echo date('F j,Y, g:i a',strtotime($q['date']))?></i></small><br/>
                    <?php echo $q['name']." post an ".$q['message']."." ?>
                </a></li>
            <div class="dropdown-divider"></div>
            <?php
        }
    } else
    {
        echo "No Notifications";
    }
    ?>

}