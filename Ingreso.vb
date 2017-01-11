Public Class Ingreso

    Dim count As Integer = 0
    Public Sub New(numero As String)

        ' This call is required by the designer.
        InitializeComponent()
        Dim query As String = "select nombre as Nombre, concat(dia,'/', mes, '/',anio) as Vencimiento from socios where numero = '" + numero + "'"
        Dim rs As New mys
        Dim salida As New DataTable
        salida = rs.datos(query)

        Label1.Text = salida.Rows.Item(0).Item("Nombre").ToString

        Dim ven As String = salida.Rows.Item(0).Item("Vencimiento").ToString
        Dim Fven As Date = Date.Parse(ven)
        Label2.Text = Fven.ToShortDateString


        Dim hoy As Date = Date.Now
        If Fven < hoy Then
            Label3.Size = New System.Drawing.Size(40, 40)
            Label3.ForeColor = Color.Red
            Label3.Text = "Vencido"
        Else
            Label3.Size = New System.Drawing.Size(40, 40)
            Label3.ForeColor = Color.Green
            Label3.Text = "Vigente"
        End If
        Dim hora = Split(Date.Now.TimeOfDay.ToString(), ".")
        Dim regquery As String = "insert into registro (numero,nombre,fecha, hora) values " _
            & "('" + numero + "','" + Label1.Text + "'," _
            & "'" + Date.Now.ToShortDateString + "','" + hora(0) + "')"
        Dim ins As New mys
        ins.insertar(regquery)



        ' Add any initialization after the InitializeComponent() call.

    End Sub

    Private Sub Ingreso_Load(sender As Object, e As EventArgs) Handles MyBase.Shown
        Timer1.Enabled = True
    End Sub

    Private Sub Timer1_Tick(sender As Object, e As EventArgs) Handles Timer1.Tick
        count = count + 1
        If count = 2 Then
            Me.Close()
        End If
    End Sub
End Class