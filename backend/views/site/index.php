<?php
use yii\helpers\Html;
/** @var yii\web\View $this */
// if(Yii::$app->user->identity->role != 'admin'){
//     Yii::$app->response->redirect(['/project/index']);
// }
$this->title = 'My Yii CRUD App';
?>
<div class="site-index">

<?php if (Yii::$app->session->hasFlash('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?php echo Yii::$app->session->getFlash('message'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <div class="jumbotron text-center bg-transparent mt-5 mb-5">
    <h1 class="display-4" style="color:#337ab7">USER MANAGEMENT SYSTEM</h1>
  </div>
  <div class="row">
    <span style="margin-bottom: 10px;"><?= Html::a('Create Project', ['/project/create'], ['class' => 'btn btn-primary']); ?></span>
  </div>
  <div class="body-content">
    <div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">username</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
          <?php if (count($users) > 0) : ?>
            <?php foreach ($users as $user) : ?>
              <tr class="table-active">
                <th scope="row"><?php echo $user->id; ?></th>
                <td><?php echo $user->firstname; ?></td>
                <td><?php echo $user->lastname; ?></td>
                <td><?php echo $user->username; ?></td>
                <td><?php echo $user->email; ?></td>
              </tr>
            <?php endforeach; ?>
          <?php else : ?>
            <tr>
              <td>No Records Found!</td>
            </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>

  </div>
</div>
