Public Class Vencidos
    Private Sub Vencidos_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim dt As New DataTable
        Dim rs As New mys
        Dim dia As String = Date.Now.Day
        Dim mes As String = Date.Now.Month
        Dim anio As String = Date.Now.Year
        anio = anio.Replace("20", "")

        Dim query As String = "select nombre as Nombre, numero as Numero, concat(mes,'/', dia, '/',anio) as Vencimiento from socios where `dia` < " + dia + " and " _
         & " `mes` < " + mes + " and `anio` <=" + anio + " and `estatus` != 'baja' order by anio desc"
        ' MsgBox(query)

        dt = rs.datos(query)

        DataGridView1.AutoSizeColumnsMode = DataGridViewAutoSizeColumnMode.Fill
        DataGridView1.DataSource = dt
    End Sub


End Class