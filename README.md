Introdução
============

O Swift Mailer é um para enviar e-mails de aplicativos PHP.

Requisitos de sistema
-------------------

Swift Mailer requer PHP 7.0 ou superior (as funções `` proc_ * `` devem ser
acessível).

Swift Mailer não funciona quando usado com sobrecarga de função como implementado
por `` mbstring`` quando `` mbstring.func_overload`` está definido para `` 2``.

Instalação
------------

A maneira recomendada de instalar o Swiftmailer é através do Compositor:

... código-bloco :: bash

    $ compositor exige "swiftmailer / swiftmailer: ^ 6.0"

Uso básico
-----------

Aqui está a maneira mais simples de enviar e-mails com Swift Mailer ::

    require_once '/path/to/vendor/autoload.php';

    // Criar o Transporte
    $ transport = (novo Swift_SmtpTransport ('smtp.example.org', 25))
    
      -> setUsername ('seu nome de usuário')
      
      -> setPassword ('sua senha')
    ;

    // Crie o Mailer usando o seu Transporte criado
    $ mailer = new Swift_Mailer ($ transport);

    // Criar uma mensagem
    $ message = (new Swift_Message ('Wonderful Subject'))
      -> setFrom (['john@doe.com' => 'John Doe'])
      -> setTo (['receiver@domain.org', 'other@domain.org' => 'Um nome'])
      -> setBody ('Aqui está a própria mensagem')
      ;

    // Envie a mensagem
    $ result = $ mailer-> send ($ message);

Você também pode usar o Sendmail como um transporte ::

    // Enviar correio
    $ transport = new Swift_SendmailTransport ('/ usr / sbin / sendmail -bs');

Conseguindo ajuda
------------

Para obter suporte geral, use 'Depósito de pilha <https://stackoverflow.com> `_.

Para relatórios de erros e solicitações de recursos, crie um novo ticket no `GitHub
<https://github.com/swiftmailer/swiftmailer/issues> `_.
