http://www.c-sharpcorner.com/code/258/how-do-i-convert-excel-file-to-pdf-using-spire-xls.aspx

using Spire.Xls;
using System.Web;
namespace EIceblueStuffs.ICeblueHelper
{
    public class SpireExcel
    {
        private string _xlsFilePath = HttpContext.Current.Server.MapPath("~/Sample/XLSFiles/");
        private string _xlsFileName;
        private Workbook workBook;
        private Worksheet workSheet;
        public SpireExcel()
            : this("mySpireExcel.xls")
        { }

        public SpireExcel(string xlsFileName)
        {
            _xlsFileName = xlsFileName;
            workBook = new Workbook();
        }

        public void CreateSampleExcel()
        {
            workSheet = workBook.Worksheets[0];
            workSheet.Range["A1"].Text = "This is a sample Excel dcouemnt and created by Spire.XLS for .NET";
            workBook.SaveToFile(_xlsFilePath + _xlsFileName);
        }

        public void ConvertToPDF()
        {
            workBook.LoadFromFile(_xlsFilePath + _xlsFileName);
            workBook.SaveToFile(_xlsFilePath + "mySpirePDFFile.pdf");
        }
    }
}