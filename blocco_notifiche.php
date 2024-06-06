<div class="containerPattern">
        <!-- Contenuto specifico per gli utenti autenticati -->
        <section class="imagePattern">
          <div class="imagePattern2" style="background-image: url('./img/notifiche.jpg');"> 
          <h1 class="patternH1">Notifiche e Aggiornamenti</h1></div>
        </section>
        <div style="border-radius: 30px; background-color: #ababab; border: 1px; height: 10px; margin: auto 100px;"></div>
        
        
        
        <div class="containerNotification" style="margin: 30px 20px;  height: auto;">
            <?php
            include './php/database.php';
            $notifications = [];
            $stmt = $conn->prepare("SELECT title, message, created_at, link FROM notifications ORDER BY created_at DESC");
            $stmt->execute();
            $stmt->bind_result($title, $message, $created_at, $link);
            while ($stmt->fetch()) {
                $notifications[] = [
                    'title' => $title,
                    'message' => $message,
                    'created_at' => $created_at,
                    'link' => $link
                ];
            }
            $stmt->close();
            $conn->close();
            
            if (count($notifications) > 0): ?>
                <?php foreach ($notifications as $notification): ?>
                    <div class="notification">
                        <h3><?php echo htmlspecialchars($notification['title']); ?></h3>
                        <p><?php echo nl2br(htmlspecialchars($notification['message'])); ?></p>
                        <?php if (!empty($notification['link'])): ?>
                            <a href="<?php echo htmlspecialchars($notification['link']); ?>" class="btn-continua-leggere">Continua a leggere</a>
                        <?php endif; ?>
                        
                        <small><?php echo htmlspecialchars($notification['created_at']); ?></small>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
            	<div class="notification">
                <p>Nessuna notifica disponibile.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <a href="https://it.freepik.com/foto-gratuito/composizione-della-democrazia-in-stile-carta-piatta_18264715.htm#fromView=search&amp;page=1&amp;position=8&amp;uuid=346e317d-525c-4a08-b2e4-b19d90249f20" style="/* border-radius: 20px; */ /* border: 1px solid; */ text-decoration: none; margin-left: 60px;">Immagine di freepik</a>
    