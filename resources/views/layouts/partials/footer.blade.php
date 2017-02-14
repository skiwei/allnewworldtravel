<?php 
use Carbon\Carbon;
use App\AllNewWorld\Libraries\VO;
?>

<p>
	&copy; Copyright {{ (new Carbon())->format('Y') }} {{ VO::COMPANY_NAME }}. All rights reserved.
</p>