<?php

require_once 'Services/JitStatus.php';

$JitStatus = new JitStatus;
echo $JitStatus->status;