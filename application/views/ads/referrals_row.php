<?php
	$where = null;
	$where['id'] = $referred_user['referred_by'];
	$referral_user = db_select_user($where);
?>
<table>
	<tr>
		<?php if($role == "admin"): ?>
			<td style="max-width:35px;min-width:35px;">
				<?=$referral_user['username'];?>
			</td>
		<?php endif ?>
		<td style="max-width:35px;min-width:35px;">
			<?=$referred_user['first_name']." ".$referred_user['last_name']?>
		</td>
		<td style="max-width:40px;min-width:40px;">
			<?= date("m/d/Y",strtotime($referred_user['date_joined'])) ?>
		</td>
		<td style="max-width:30px;min-width:30px;">
			$10
		</td>
	</tr>
</table>