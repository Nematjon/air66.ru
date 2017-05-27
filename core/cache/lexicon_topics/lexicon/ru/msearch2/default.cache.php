<?php  return array (
  'area_mse2_main' => 'Основные',
  'area_mse2_search' => 'Поиск',
  'area_mse2_index' => 'Индексация',
  'setting_mse2_index_fields' => 'Индексация полей',
  'setting_mse2_index_fields_desc' => 'Укажите поля ресурса для индексации, через запятую. Каждому полю можно назначить вес слова через двоеточие. ТВ параметры указываются с префиксом "tv_", например "pagetitle:3,tv_color:1".',
  'setting_mse2_index_comments' => 'Индексировать комментарии',
  'setting_mse2_index_comments_desc' => 'Если эта настройка включена, и вы используете компонент "Tickets" - будут проиндексированы комментарии ресурсов.',
  'setting_mse2_index_comments_weight' => 'Вес слова в комментарии',
  'setting_mse2_index_comments_weight_desc' => 'Укажите вес слова для комментария. По умолчанию - "1".',
  'setting_mse2_index_min_words_length' => 'Минимальная длина слова',
  'setting_mse2_index_min_words_length_desc' => 'Укажите минимальную длину слова, которое будет участвовать в поиске для исключения ложных срабатываний. По умолчанию - "4".',
  'setting_mse2_search_exact_match_bonus' => 'Балл за точное совпадение',
  'setting_mse2_search_exact_match_bonus_desc' => 'Укажите, сколько баллов добавлять за точное совпадение поисковой фразы и содержимого страницы. По умолчанию - "5".',
  'setting_mse2_search_like_match_bonus' => 'Балл за неточное совпадение',
  'setting_mse2_search_like_match_bonus_desc' => 'Укажите, сколько баллов добавлять за неточное совпадение поисковой фразы и содержимого страницы. По умолчанию - "3".',
  'setting_mse2_search_all_words_bonus' => 'Бал за совпадение по всем словам',
  'setting_mse2_search_all_words_bonus_desc' => 'Если поисковый запрос состоит из нескольких слов, и все они были найдены в ресурсе - ему присваиваются дополнительные очки. По умолчанию - "5".',
  'setting_mse2_search_split_words' => 'Разбивка запроса на слова',
  'setting_mse2_search_split_words_desc' => 'Регулярное выражение для php функции preg_split(), которое разбивает запрос пользователя на отдельные слова для поиска. По умолчанию, разбивка идет по пробелам.',
  'setting_mse2_filters_handler_class' => 'Класс-обработчик фильтров',
  'setting_mse2_filters_handler_class_desc' => 'Имя класса, который реализует логику работы фильтров. По умолчанию - "mse2FiltersHandler".',
  'setting_mse2_frontend_css' => 'Стили фронтенда',
  'setting_mse2_frontend_css_desc' => 'Путь к файлу со стилями магазина. Если вы хотите использовать собственные стили - укажите путь к ним здесь, или очистите параметр и загрузите их вручную через шаблон сайта.',
  'setting_mse2_frontend_js' => 'Скрипты фронтенда',
  'setting_mse2_frontend_js_desc' => 'Путь к файлу со скриптами магазина. Если вы хотите использовать собственные скрипты - укажите путь к ним здесь, или очистите параметр и загрузите их вручную через шаблон сайта.',
  'msearch2' => 'mSearch2',
  'mse2_menu_desc' => 'Настройки поиска на вашем сайте',
  'mse2_tab_search' => 'Поиск',
  'mse2_tab_search_intro' => 'Здесь вы можете проверить, как работает поиск у вас на сайте.',
  'mse2_tab_index' => 'Индекс',
  'mse2_tab_index_intro' => 'Этот раздел отвечает за управление поисковым индексом. В зависимости от мощности сервера, можно указывать сколько страниц индексировать за один запрос.',
  'mse2_tab_queries' => 'Запросы',
  'mse2_tab_queries_intro' => 'В этой таблице вы видите поисковые запросы на вашем сайте. Если у вас много нерелевантных запросов, возможно вам стоит изменить настройки индексации или добавить синонимы.',
  'mse2_tab_aliases' => 'Синонимы',
  'mse2_tab_aliases_intro' => 'Вы можете указать синонимы для слов, которые будут автоматически подставляться в запрос. Синоним может заменять указанное слово - будет полезно для исправления пользовательских опечаток, например "wiskas &rarr; whiskas".',
  'mse2_tab_dictionaries' => 'Словари',
  'mse2_tab_dictionaries_intro' => 'Установите нужные словари из предложенного списка. Для нормальной работы mSearch2 у вас должен быть хотя бы один словарь. После изменения списка словарей сайт нужно обязательно проиндексировать заново.',
  'mse2_err_no_query' => 'Задан пустой поисковый запрос.',
  'mse2_err_no_query_var' => 'Не указан поисковый запрос.',
  'mse2_err_min_query' => 'Слишком короткий поисковый запрос.',
  'mse2_err_no_results' => 'Подходящих результатов не найдено.',
  'mse2_search' => 'Поиск на сайте',
  'mse2_search_clear' => 'Очистить',
  'mse2_intro' => 'Превью',
  'mse2_weight' => 'Вес',
  'mse2_show_unpublished' => 'Неопубликованные',
  'mse2_show_deleted' => 'Удалённые',
  'mse2_index_create' => 'Обновить индекс',
  'mse2_index_clear' => 'Очистить индекс',
  'mse2_index_total' => 'Всего страниц',
  'mse2_index_indexed' => 'Проиндексировано страниц',
  'mse2_index_words' => 'Проиндексировано слов',
  'mse2_index_limit' => 'Индексировать по n страниц',
  'mse2_index_offset' => 'Пропустить от начала',
  'mse2_filter_resource_isfolder' => 'Контейнер',
  'mse2_filter_resource_class_key' => 'Класс документа',
  'mse2_filter_ms_price' => 'Цена',
  'mse2_filter_ms_vendor' => 'Производитель',
  'mse2_filter_ms_new' => 'Новый',
  'mse2_filter_resource_parent' => 'Категория',
  'mse2_filter_boolean_yes' => 'Да',
  'mse2_filter_boolean_no' => 'Нет',
  'mse2_filter_number_min' => 'От',
  'mse2_filter_number_max' => 'До',
  'mse2_filter_total' => 'Всего результатов:',
  'mse2_filter_msoption_color' => 'Цвета',
  'mse2_filter_msoption_size' => 'Размеры',
  'mse2_sort' => 'Сортировка:',
  'mse2_sort_asc' => 'по возрастанию',
  'mse2_sort_desc' => 'по убыванию',
  'mse2_sort_publishedon' => 'Дата публикации',
  'mse2_sort_price' => 'Цена',
  'mse2_limit' => 'Показывать на странице',
  'mse2_select' => 'Выберите из списка',
  'mse2_selected' => 'Вы выбрали',
  'mse2_err_no_filters' => 'Нечего фильтровать',
  'mse2_chunk_default' => 'Стандартный вид',
  'mse2_chunk_alternate' => 'Алтернативный вид',
  'mse2_query' => 'Запрос',
  'mse2_query_quantity' => 'Количество запросов',
  'mse2_query_found' => 'Количество результатов',
  'mse2_query_remove' => 'Удалить запрос',
  'mse2_query_remove_all' => 'Удалить все запросы',
  'mse2_query_remove_all_confirm' => 'Вы действительно хотите удалить все поисковые запросы? Эта операция необратима!',
  'mse2_query_search' => 'Поиск по запросам',
  'mse2_alias' => 'Синоним',
  'mse2_alias_word' => 'Исходное слово',
  'mse2_alias_replace' => 'Заменяет',
  'mse2_alias_create' => 'Добавить синоним',
  'mse2_alias_update' => 'Изменить псевдоним',
  'mse2_alias_remove' => 'Удалить псевдоним',
  'mse2_alias_search' => 'Поиск по синонимам',
  'mse2_alias_err_rq' => 'Это поле обязательно для заполнения.',
  'mse2_alias_err_eq' => 'Синоним ничем не отличается от исходного слова.',
  'mse2_alias_err_ae' => 'Синоним "[[+alias]]" для слова "[[+word]]" уже задан.',
  'mse2_dictionary' => 'Словарь',
  'mse2_language' => 'Язык',
  'mse2_dictionary_installed' => 'Установлен',
  'mse2_dictionary_russian' => 'Русский',
  'mse2_dictionary_english' => 'Английский',
  'mse2_dictionary_german' => 'Немецкий',
  'mse2_dictionary_ukrainian' => 'Украинский',
  'mse2_dictionary_estonian' => 'Эстонский',
  'mse2_dictionary_install' => 'Установить словарь',
  'mse2_dictionary_remove' => 'Удалить словарь',
  'mse2_dictionary_mirror' => 'Зеркало Sourceforge',
  'mse2_dictionary_mirror_select' => 'Выберите из списка',
  'mse2_dictionary_err_ns' => 'Не указан словарь для загрузки',
  'mse2_filter_ms_arearoom' => 'Площадь помещения',
  'mse2_filter_ms_coolpower' => 'Мощ. в режиме охлаждения',
  'mse2_filter_ms_drymode' => 'Режим осушение',
  'mse2_filter_ms_faza' => 'Фаза',
  'mse2_filter_ms_made_in' => 'Страна',
  'mse2_filter_ms_mainfunctions' => 'Основные режимы',
  'mse2_filter_ms_maxflow' => 'Максимальный воздушный поток',
  'mse2_filter_ms_maxleinght' => 'Макс. длина коммуникаций',
  'mse2_filter_ms_popular' => 'Популярный',
  'mse2_filter_ms_powerforcool' => 'Потребля-я мощ. при охлаж.',
  'mse2_filter_ms_powerforhot' => 'Потребл. мощ. при обогреве',
  'mse2_filter_ms_pyltdu' => 'Пульт ДУ',
  'mse2_filter_ms_speedfun' => 'Рег. скорости вращ. вент-ра',
  'mse2_filter_ms_timer' => 'Таймер',
  'mse2_filter_ms_typecond' => 'Тип кондиционера',
  'mse2_filter_ms_typehladogen' => 'Тип хладагена',
  'Пульт ДУ' => 'mse2_filter_ms_pyltdu',
);