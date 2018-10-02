<?php
    $userfile = json_decode(file_get_contents('./config/clients.txt', true),1);
    $signature = file_get_contents('./config/signature.txt', true);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signature Generator</title>
    </head>
    <body>
        <h1>Signature Generator by Thomas Murhammer</h1>
        <div style="margin-bottom: 25px;">
            <h2 style="margin-bottom: 5px;">Generator Tools</h2>
            <?php if(isset($_GET['success'])): ?><div>Successfully generated <b><?php echo $_GET['success']; ?> signatures</b> in <b>"/signatures"</b>.</div><?php endif; ?>
            <a href="pages/generateSignatures.php"><button>Generate all Signatures</button></a>
            <div style="margin-top: 5px;">
                <form method="POST" action="./pages/generateSinglesignature.php">
                    <input type="number" name="id" placeholder="id">
                    <button type="submit">Generate single Signature</button>
                </form>
            </div>
        </div>
        <div style="margin-bottom: 25px;">
            <h2 style="margin-bottom: 5px;">Add User to file</h2>
            <form method="POST" action="./pages/addUser.php">
                <input name="signaturename" placeholder="signature title">
                <input name="name" placeholder="name with titel">
                <input name="telefon" placeholder="phone">
                <input type="email" name="email" placeholder="email">
                <input name="abteilungen" placeholder="departments">
                <button type="submit">Add</button>
            </form>
			<div>Seperate departments with a comma.</div>
        </div>
        <div style="margin-bottom: 25px;">
            <h2 style="margin-bottom: 5px;">Remove User from file</h2>
            <form method="POST" action="./pages/removeUser.php">
                <input type="number" name="id" placeholder="id">
                <button type="submit">Remove</button>
            </form>
        </div>
        <div style="margin-bottom: 25px;">
            <h2 style="margin-bottom: 5px;">Users in file (/config/clients.txt)</h2>
            <div style="width: 500px;">
                <?php if(count($userfile) != 0): ?>
                    <?php for($i=0; $i < count($userfile); $i++): ?>
                    <div style="font-weight: bold;"><?php echo $i; ?></div>
                    <div><?php echo $userfile[$i]['name']; ?>&nbsp;<span style="font-size: 11px;"><?php echo $userfile[$i]['signaturename']; ?></span></div>

                    <?php $abteilungexp = explode(',', $userfile[$i]['abteilungen']); ?>
                    <?php for($a=0; $a < count($abteilungexp); $a++): ?>
                    <div><?php echo $abteilungexp[$a]; ?></div>
                    <?php endfor; ?>

                    <div><?php echo $userfile[$i]['telefon']; ?></div>
                    <div style="padding-bottom: 10px; margin-bottom: 10px; border-bottom: 1px solid rgba(0, 0, 0, 0.3);"><?php echo $userfile[$i]['email']; ?></div>
                    <?php endfor; ?>
                <?php endif; ?>
                <?php if(count($userfile) == 0): ?>
                    <pre>No entries available.</pre>
                <?php endif; ?>
            </div>
        </div>
    </body>
</html>