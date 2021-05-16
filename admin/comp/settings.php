<?php require_once "include/header.php"; ?>

<link rel="stylesheet" type="text/css" href="/css/form.css?css_version=2">
<script src="/js/form.js" defer></script>

<h2>Competition Settings</h2>
<div>
    <form>
        <div>
            <div class="input-group">
                    <label>Competition Date <b class="req">*</b></label>
                    <input name="reg-date" type="date" value="" required>
            </div>
            <span class='one-line'>
                <div class="input-group">
                    <label>Registration Start <b class="req">*</b></label>
                    <input name="reg-start" type="datetime-local" value="" required>
                </div>

                <div class="input-group">
                    <label>Registration End <b class="req">*</b></label>
                    <input name="reg-end" type="datetime-local" value="" required>
                </div>
            </span>
        </div>
        <input type="submit" class="submit" value="Save">
    </form>
</div>
