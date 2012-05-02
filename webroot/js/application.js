/**
 * This file is part of Project Decision Tool.
 * 
 * Project Decision Tool is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * Project Decision Tool is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see 
 * <http://www.gnu.org/licenses/>.
 *
 * @author Johnathan Pulos <license@missionaldigerati.org>
 * @copyright Copyright 2012 Missional Digerati
 * 
 */
$(document).ready(function() {
	/**
	 * Setup the sign div options effects 
	 */
	$('a.show_sign_in_option').click(function() {
		var rel = $(this).attr('rel');
		$('div#sign_in_options_wrapper').fadeOut('slow', function() {
			$(this).children('div').hide();
			$('#'+rel).show();
			$(this).fadeIn('slow');
		});
		return false;
	});
});
