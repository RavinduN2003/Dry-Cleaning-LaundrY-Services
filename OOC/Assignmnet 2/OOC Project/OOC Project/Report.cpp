#include "Report.h"
#include <iostream>

using namespace std;


Report::Report() {
	reportId = 0;
	reportDes = "";

}
Report::Report(int rId, string rDes) {
	reportId = rId;
	reportDes = rDes;
}
void Report::generateReports(int rId, string rDes) {
	reportId = rId;
	reportDes = rDes;
}
Report::~Report() {

}
