import $ from 'jquery'
const $dropdown = $('.dropdown')
const $dropdownBTN = $('[data-dropdown="btn"]')
const $dropdownNAV = $('[data-dropdown="nav"]')

function closeAllDropdown(){
	$dropdown.children('[data-dropdown-active]').removeAttr('data-dropdown-active')
	$dropdown.children('.dropdown__nav--active').removeClass('dropdown__nav--active')
}

$dropdownBTN.on('click', function(e) {
	e.preventDefault()
	if($(this).attr('data-dropdown-active')){
		return $(this).removeAttr('data-dropdown-active').next($dropdownNAV).removeClass('dropdown__nav--active')
	}
	closeAllDropdown()
	$(this).attr('data-dropdown-active', 'true').next($dropdownNAV).addClass('dropdown__nav--active')
})

$(document).on('click', (e) => {
	if(!$dropdown.has(e.target).length) {
		$dropdownBTN.removeAttr('data-dropdown-active')
		$dropdownNAV.removeClass('dropdown__nav--active')
	}
})
