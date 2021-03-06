<?php  return array (
  'ha.providers' => 'Список провайдеров авторизации, через запятую. Все доступные провайдеры находятся тут {core_path}components/hybridauth/model/hybridauth/lib/Providers/. Например, &providers=`Google,Twitter,Facebook`.',
  'ha.groups' => 'Список групп для регистрации пользователя, через запятую. Можно указывать роль юзера в группе через двоеточие. Например, &groups=`Users:1` добавит юзера в группу "Users" с ролью "member".',
  'ha.rememberme' => 'Запомниает пользователя на долгое время. По умолчанию - включено.',
  'ha.loginContext' => 'Основной контекст для авторизации. По умолчанию - текущий.',
  'ha.addContexts' => 'Дополнительные контексты, через запятую. Например, &addContexts=`web,ru,en`',
  'ha.loginResourceId' => 'Идентификатор ресурса, на который отправлять юзера после авторизации. По умолчанию, это 0 - обновляет текущую страницу.',
  'ha.logoutResourceId' => 'Идентификатор ресурса, на который отправлять юзера после завершения сессии. По умолчанию, это 0 - обновляет текущую страницу.',
  'ha.loginTpl' => 'Этот чанк будет показан анонимному пользователю, то есть любому гостю.',
  'ha.logoutTpl' => 'Этот чанк будет показан авторизованному пользователю.',
  'ha.profileTpl' => 'Чанк для вывода и редактирования профиля пользователя.',
  'ha.providerTpl' => 'Чанк для вывода ссылки на авторизацию или привязку сервиса к учетной записи.',
  'ha.activeProviderTpl' => 'Чанк для вывода иконки привязанного сервиса.',
  'ha.profileFields' => 'Список разрешенных для редактирования полей юзера, через запятую. Также можно указать максимальну. длину значений, через двоеточие. Например, &profileFields=`username:25,fullname:50,email`.',
  'ha.requiredFields' => 'Список обязательных полей при редактировании. Эти поля должны быть заполнены для успешного обновления профиля. Например, &requiredFields=`username,fullname,email`.',
  'ha.redirectUri' => 'Вы можете указать "redirect_uri", на который вас отправит удалённый сервис. По умолчанию, это корень текущего контекста.',
);