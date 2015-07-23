(function(){
	var app = angular.module('karla', []);

	var bioPerson = {
		name:'Karla',
		price:'A lot',
		description:'much wow'
	};

	var gems = [
		{
			name:'Gatita',
			price:'1800',
			description:'soon!',
			canPurchase: true,
			images: [
				{
					full: 'http://www.jeremynoeljohnson.com/wp-content/uploads/2014/06/crazy_cat_3.jpg',
 					thumb: 'http://www.jeremynoeljohnson.com/wp-content/uploads/2014/06/crazy_cat_3.jpg'
				}

			]
		},
		{
			name:'De Amor',
			price:'3200',
			description:'feed me bitch!',
			canPurchase: false,
			images: [
				{
					full: 'http://www.blogcdn.com/www.pawnation.com/media/2013/10/cat-smartoriginal-1382023522.jpg',
 					thumb: 'http://www.blogcdn.com/www.pawnation.com/media/2013/10/cat-smartoriginal-1382023522.jpg'
				}
			]
		}
	];

	app.controller('KarlaController', function(){
		this.person = bioPerson;
		this.countries = [
			{ name: 'Afghanistan' },
			{ name: 'Albania' },
			{ name: 'Algeria' },
			{ name: 'American' },
			{ name: 'Andorra' },
			{ name: 'Angola' },
			{ name: 'Anguilla' },
			{ name: 'Antarctica' },
			{ name: 'Antigua' },
			{ name: 'Argentina' },
			{ name: 'Armenia' },
			{ name: 'Aruba' },
			{ name: 'Australia' },
			{ name: 'Austria' },
			{ name: 'Azerbaijan' },
			{ name: 'Bahamas' },
			{ name: 'Bahrain' },
			{ name: 'Bangladesh' },
			{ name: 'Barbados' },
			{ name: 'Belarus' },
			{ name: 'Belgium' },
			{ name: 'Belize' },
			{ name: 'Benin' },
			{ name: 'Bermuda' },
			{ name: 'Bhutan' },
			{ name: 'Bolivia' },
			{ name: 'Bosnia' },
			{ name: 'Botswana' },
			{ name: 'Brazil' }
		];
	});

	app.controller('StoreController', function(){
		this.products = gems;
	});


})();