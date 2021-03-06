<?php defined("SYSPATH") or die("No direct script access.")
/**
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2009 Bharat Mediratta
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */
?>
<SCRIPT language="JavaScript">
function ive(s)
{
  return (s.indexOf(".")>2)&&(s.indexOf("@")>0);
}

function se(v)
{
  v.style.backgroundColor="#FAA";
}

function re(v)
{
  v.style.backgroundColor="#FFF";
}

function ci(v)
{
  if ((!v.value) || (v.value.length==0)) {se(v);return false;}
  re(v);
  return true;
}

function so(){
	  var p=true;
	  var d=document.checkout;
	  if(!ci(d.fullname)){p=false;}
	  if((!ci(d.email))||(!ive(d.email.value))){se(d.email);p=false;}
	  if(!ci(d.phone)){p=false;}
	  if (p)
	  {
		  d.submit();
	  }
}
</SCRIPT>
<div class="gBlock">
<?= $form ?>
<h2>Payment Details</h2>
<p>After you have confirmed the order we will get in contact with you to arrange payment.</p>
<a href="<?= url::site("basket/view_basket") ?>" class="left gButtonLink ui-state-default ui-corner-all ui-icon-left">
<span class="ui-icon ui-icon-arrow-1-w"></span><?= t("Back to Basket") ?></a>
<a href="javascript: so()" class="right gButtonLink ui-state-default ui-corner-all ui-icon-right">
<span class="ui-icon ui-icon-arrow-1-e"></span><?= t("Proceed to Confirmation") ?></a>
</div>
