(function($) {
	// Включаем строгий режим ECMA-Script
	"use strict";
	/**
	 * В скрипте мы будем выполнять AJAX-запросы к СУБД MySQL
	 * Чтобы каждый раз не писать один и тот же код AJAX-запроса, создадим 
	 * свой метод request в объекте jQuery
	 */
	$.extend({
		request: function( options ) {
			// В методе request будут различные опции (настройки)
			// Это своего рода настройки по умолчанию, созданные
			// в объекте options
			options = $.extend({
				type: "POST",					// Метод передачи данных серверу
				url: "requests.php",			// Путь к файлу со сценарием обращения к СУБД
				data: null,						// Данные, которые мы будем передавать серверу
				async: false,					// Асинхронность выполнения AJAX-запроса
				dataType: "json",				// Тип данных, в котором они передаются
				before: null,					// Код, выполняемый перед AJAX-запросом
				error: function() {},			// Код, выполняемый в случае какой-либо ошибки при AJAX-запросе
				complete: options.callback,		// Код, выполняемый после AJAX-запроса	
				success: function( result ) {	// Код, выполняемый после получения ответа от сервера
					$.response.result = result;	// Помещаем ответ от сервера в отдельный объект
				},
				result: null,					// Результат работы
				callback: null					// Функция обратного вызова
			}, options );
			options.before = function() {
				alert( "ok before" );
			};
			// Тело AJAX-запроса
			$.ajax({
				type: options.type,
				url: options.url,
				data: options.data,
				async: options.async,
				dataType: options.dataType,
				before: options.before,
				error: options.error,
				complete: options.complete,
				success: options.success
			});
			return this;
		},
		// Объект, в котором хранится ответ от сервера, полученный через AJAX-запрос
		response: {
			result: {}
		}
	});
	jQuery(function() {
		/**
		 *  При выборе города нужно сделать многое
		 *  Сначала из списка школ должны быть удалены все имеющиеся школы
		 *  Затем поле выбора школ должно стать неактивным
		 */
		// Обработчик события выбора города
		$( '#city' ).change(function() {
			let city_id = $( this ).val();	// Идентификатор выбранного города
			// Отключаем поле, установив значения свойства disabled
			$( '#school' ).prop( 'disabled', true )
			// Находим и удаляем все возможные школы из раскрывающегося списка
			.find( 'option:not( :first )' ).remove();
			// Если был выбран конкретный город
			if ( city_id != 0 ) {
				// Создаем AJAX-запрос, который вернет нам перечень школ для выбранного города
				$.request({
					data: "request=getSchool&city_id=" + city_id,
				});
				// Успешный AJAX-запрос должен закончиться вставкой полученного перечня школ
				// в раскрывающийся список select#school
				// Результат AJAX-запроса мы сохраняли в отдельном объекте
				let i = 0, schools = $.response.result;
				for ( i; i < schools.length; i++ ) {
					$( '#school' ).append( '<option value="' + schools[ i ].id + '">' + schools[ i ].school + '</option>' );
				}
				// Включаем поле со списком школ
				$( '#school' ).prop( 'disabled', false );
			}
		}); // Обработчик события выбора города
// Обработчик события выбора школы
		$( '#school' ).change(function() {
			let url='http://localhost:81/itfanis/dir/php/clients/www/index.php';
			location.href = url;
		});// Обработчик события выбора школы
	});



})(jQuery); // Используем немедленно вызываемую анонимную функцию

