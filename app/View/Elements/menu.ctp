     <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">New</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($this->params['controller'] == 'posts' && $this->params['action'] == 'index'){echo 'active';} ?>"><?php echo $this->Html->link('Home', array('controller' => 'posts', 'action' => 'index')); ?></li>
            <?php if(AuthComponent::user('id')): ?>
            <li class=""><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
            <li class=""><?php echo $this->Html->link('Profile', array('controller' => 'users', 'action' => 'edit')); ?></li>
            <li class=""><?php echo $this->Html->link('Admin', array('controller' => 'posts', 'action' => 'index', 'admin' => true)); ?></li>
            <?php else: ?>
            <li class=""><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
            <li class=""><?php echo $this->Html->link('SignUp', array('controller' => 'users', 'action' => 'signup')); ?></li>
            <?php endif; ?>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->