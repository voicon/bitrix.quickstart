<?
$MESS['CACHE_TYPE_TIP'] = 'Тип кеширования. В целях достижения наилучшего быстродействия выберите вариант "Авто + Управляемое".';
$MESS['CACHE_TIME_TIP'] = 'Время для кеширования компонента. Для работы компонента необходимо получение дополнительных настроек и т.п. Поэтому для улучшения производительности следует кешировать компонент.';
$MESS['INTERFACE_ID_TIP'] = 'ID интерфейса. Из интерфейса берутся настройки, поля, и рейтинги.';
$MESS['TARGET_SUFFIX_TIP'] = 'Выберите тип объекта. В случае с элементами инфоблока (товары, новости, статьи и т.п.) необходимо указывать соответствующую настройку - т.к. в таком случае ID объекта обозначается, например, как E_2 - где "2" это элемент инфоблока.';
$MESS['TARGET_TIP'] = 'Идентификатор объекта, к которому составляются отзыва. Для элементов инфоблока нужно указывать числовой идентификатор, для других объектов - любое значение, которое будет уникальным в пределах всего сайта. Например, для реализации отзывов о магазине укажите здесь "SHOP", "MAGAZIN" - или любое другое удобное название будущего типа.';
$MESS['COUNT_TIP'] = 'Количество отзывов, которое показывается на странице. В случае, если отзывов больше чем указано здесь, отзывы будут разбиты на несколько страниц.';
$MESS['SORT_BY_1_TIP'] = 'Поле для основной сортировки.';
$MESS['SORT_ORDER_1_TIP'] = 'Порядок основной сортировки.';
$MESS['SORT_BY_2_TIP'] = 'Поле для дополнительной сортировки. Например, если для первой сортировки используется результат голосования, и имеются несколько отзывов с одинаковым результатом голосования, то с помощью данной опции можно установить, чтобы одинаковые элементы дополнительно сортировались, например, в порядке добавления.';
$MESS['SORT_ORDER_2_TIP'] = 'Направление для дополнительной сортировки. Например, если для первой сортировки используется результат голосования, и имеются несколько отзывов с одинаковым результатом голосования, то с помощью данной опции можно установить, чтобы одинаковые элементы дополнительно сортировались, например, в порядке добавления.';
$MESS['FILTER_NAME_TIP'] = 'Имя фильтра для дополнительной фильтрации. Например, можно организовать дополнительно отображение только отзывов с положительным результатом голосования. Для установки фильтра необходимо помещение его в глобальный массив, например:<pre class="php" style="font-family:monospace;margin:4px;"><span style="color: #000000; font-weight: bold;">global</span> <span style="color: #000088;">$arFilter</span><span style="color: #339933;">;</span></pre><pre class="php" style="font-family:monospace;margin:4px;"><span style="color: #000088;">$arFilter</span> <span style="color: #339933;">=</span> <span style="color: #990000;">array</span><span style="color: #009900;">&#40;</span><span style="color: #0000ff;">&quot;&gt;VOTE_RESULT&quot;</span><span style="color: #339933;">=&gt;</span><span style="color: #cc66cc;">1</span><span style="color: #009900;">&#41;</span><span style="color: #339933;">;</span></pre>При этом имя фильтра будет "arFilter"';
$MESS['DATE_FORMAT_TIP'] = 'Формат даты и времени, в котором отображаются даты создания отзыва и дата ответа на отзыв.';
$MESS['SHOW_AVATARS_TIP'] = 'Опция включает показ аватаров пользователей.';
$MESS['SHOW_ANSWERS_TIP'] = 'Опция позволяет показывать ответы администрации.';
$MESS['SHOW_ANSWER_DATE_TIP'] = 'Опция позволяет показывать даты ответов администрации.';
$MESS['USER_ANSWER_NAME_TIP'] = 'Вариант отображения имени администраторов, ответивших на отзывы. Доступны макросы любых полей пользователя: #NAME# (имя), #LAST_NAME# (фамилия), #SECOND_NAME# (отчество) и др. Например. Чтобы выводить логин и имя, укажите так: "(#LOGIN#) #NAME#"  (без кавычек).';
$MESS['SHOW_ANSWER_AVATAR_TIP'] = 'Опция включает показ аватаров администраторов.';
$MESS['ALLOW_VOTE_TIP'] = 'Включите данную опцию, если необходимо предоставить пользователям возможность голосовать за понравившиеся и непонравившиеся отзывы.';
$MESS['MANUAL_CSS_INCLUDE_TIP'] = 'Опция, позволяющая подключать CSS-стили даже в условиях кеширования родительского компонента (напр., если данный компонент размещен внутри компонента bitrix:catalog.element или bitrix:news.detail). В случае, если родительский компонент работает без кеширования, данную опцию лучше убрать.';
$MESS['AUTO_LOADING_TIP'] = 'С помощью данной опции компонент при загрузке сразу же обновляет себя, подгружая отзывы без кеширования. Целесообразно применять только, если компонент расположен в другом кешируемом компоненте.';
$MESS['SHOW_ALL_IF_ADMIN_TIP'] = 'Опция позволяет администратором смотреть все отзывы (в т.ч. неопубликованные) прямо на сайте. Благодаря использованю технологии «Эрмитаж» от 1С-Битрикс (в частности, контекстную панель для быстрого редактирования и удаления отзывов), администратор может разрешать публикацию отзывов прямо на сайте, не заходя в админку.';
$MESS['MINIMIZE_FORM_TIP'] = 'Опция, позволящая изначально свернуть форму добавления отзыва. Открытие формы происходит обычно при нажатии соответствующей кнопки/ссылки. Весь функционал данной опции зависит от шаблона, т.е. созданный Вами шаблон должен самостоятельно обрабатывать этот параметр.';
$MESS['JS_TIP'] = 'С помощью данной опции компонент будет самостоятельно подключать указанные необходимые JS-скрипты. По умолчанию подключаются только плагин звездочек. Вы также можете отменить здесь подключение дополнительных скриптов и делать это вручную.';
?>