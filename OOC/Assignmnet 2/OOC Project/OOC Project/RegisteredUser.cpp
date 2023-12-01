#include "RegisteredUser.h"
#include "Order.h"

#include <iostream>

using namespace std;

RegisteredUser::RegisteredUser() {
	Username = "";
	password = 0;
	name = "";
	userId = 0;
}
RegisteredUser::RegisteredUser(string uName, int pw, string rName, int uId) {
    Username = uName;
	password = pw;
	name = rName;
	userId = uId;
}
void RegisteredUser::login(string uName, int pw) {

	if (Username == uName && password == pw) {
		cout << "Login Successful!" << endl;
	}
	else if (Username != uName || password != pw) {
		cout << "Login Unsucceful!" << endl;
	}
}
void RegisteredUser::browseServicesAndPrices() {
	Service service1;
	service1.ViewServicesAndPrices();
}
void RegisteredUser::updateProfile(string uName, int pw, string rName, int uId) {
	Username = uName;
	password = pw;
	name = rName;
	userId = uId;
}
void RegisteredUser::viewOrderHistory() {
	Order order;
	order.getOrderDetails();
}
string RegisteredUser::placeOrder(string orderName, string orderType, double orderPrice){
	
	try {
		Order order1(orderName,orderType,orderPrice);
		// If the Order constructor completes without exceptions,
		// it means the order has been successfully placed.
		return "Order placed successfully.";
	}
	catch (const exception& e) {
		// If an exception is thrown during the construction of the Order object,
		// catch it and display an error message.
		return "Order Placing Unsucceful!";
	}

}
RegisteredUser::~RegisteredUser() {

}