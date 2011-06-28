<div class="grid-8 push-8 ui-widget ui-widget-content">
    <div class="grid-24 ui-widget-header">
        <span>Login</span>
    </div>
    <div class="clear"></div>
    <div class="grid-24 ui-widget-content">
        <?php
            // a hack for displaying label and input within div.
            $inputOption = array(
                'before' => '<div class="grid-8">',
                'between' => '</div><div class="grid-16">',
                'after' => '</div>',
            );
            
            $endSubmitOption = array(
                'label' => 'Login',
                'div' => array(
                    'class' => 'grid-16 prefix-8'
                )
            );
            
            echo $session->flash('auth');
            echo $this->Form->create('User', array('action' => 'login'));
            echo $this->Form->input('username', $inputOption);
            echo $this->Form->input('password', $inputOption);
            echo $this->Form->end($endSubmitOption);
        ?>
    </div>
</div>
