<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Les contacts
        <small><?= date('<b>d/m/Y</b> à <b>H:i:s</b>') ?></small>
      </h1>
    </section>
     
    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Messages non lus</h3>
                </div>
                <div class="box-body">
                    <table id="example" class="table table-bordered table-hover table-responsive">
                      <thead>
                          <tr>
                              <th>Nom et Prenoms</th>
                              <th>Email de l'expediteur</th>
                              <!--<th>Services à contacter</th>-->
                              <th>Objet_du_message</th>
                              <th>Message</th>
                              <th>Date_du_message</th>
                              <th>Actions_appliquer</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                              $messages = get_Messages();
                        ?>
                        <?php 
                        foreach($messages as $sms){
                        ?>
                        <tr id="messages_<?= $sms->id ?>">
                            <td><?= $sms->nom ?> <?= $sms->prenoms ?></td>
                            <td><?= $sms->email ?></td>
                            <td><?= substr($sms->objet, 0,20) ?>...</td>
                            <td><?= substr($sms->message, 0, 20) ?> ...</td>
                            <td><?= date("d/m/y à H:i:s", strtotime($sms->date)) ?></td>

                            <td>
                              <a href="#" id="<?= $sms->id ?>" class="btn btn-success see-sms"><i class="fa fa-check"></i></a>
                              <a href="#" id="<?= $sms->id ?>" class="btn btn-danger delete-sms"><i class="fa fa-trash"></i></a>
                              <a href="#myModal_<?= $sms->id ?>" id="lance-modal" class="btn btn-warning modal-trigger"><i class="fa fa-eye"></i></a>
                              
                              <div class="modal fade" id="myModal_<?= $sms->id ?>">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true" style="color:red;">&times;</span></button>
                                      <h5 class="modal-title"><b><?= $sms->objet ?></b></h5>
                                    </div>
                                    <div class="modal-body">
                                      <p>Message envoyé par <strong><?= $sms->nom ?> <?= $sms->prenoms ?></strong></p>
                                      <p>Le <?= date('d/m/Y à H:i:s', strtotime($sms->date)); ?></p>
                                      <p>Service à contacter: <b><?= $sms->service ?></b></p>
                                      <p><?= $sms->message ?></p>
                                    </div>
                                    <div class="modal-footer">
                                      <button id="<?= $sms->id ?>"  class="btn btn-danger"><i class="fa fa-trash"></i> SUPPRIMER</button>
                                      <button  id="<?= $sms->id ?>"" class="btn btn-success"><i class="fa fa-check"></i> CONFIRMER</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </td>
                        </tr>
                        
                        <?php
                        } 
                        ?>

                      </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>
    </section>
</div>