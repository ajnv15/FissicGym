Public Class Form1
    Private Sub NuevoSocioToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles NuevoSocioToolStripMenuItem.Click
        Socios.Show()
    End Sub

    Private Sub CuotaNuevaToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles CuotaNuevaToolStripMenuItem.Click
        nuevaCuota.Show()
    End Sub

    Private Sub PagoDeSocioToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles PagoDeSocioToolStripMenuItem.Click
        Pago.Show()
    End Sub

    Private Sub VencidosToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles VencidosToolStripMenuItem.Click
        versocio.Show()
    End Sub

    Private Sub VencidosToolStripMenuItem1_Click(sender As Object, e As EventArgs) Handles VencidosToolStripMenuItem1.Click
        Vencidos.Show()

    End Sub

    Private Sub DarDeBajaToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles DarDeBajaToolStripMenuItem.Click
        Dar_de_baja.Show()
    End Sub

    Private Sub ModificarCuotaToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles ModificarCuotaToolStripMenuItem.Click
        Modificar_cuota.Show()
    End Sub

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim query As String = "select * from socios"
        Dim rs As New mys
        Dim dt As New DataTable
        dt = rs.datos(query)
        Dim numero As IList(Of String) = New List(Of String)
        'Dim nombre As IList(Of String) = New List(Of String)
        For Each row In dt.Rows
            numero.Add(row("numero").ToString + " " + row("nombre").ToString)
        Next
        ComboBox1.Items.AddRange(numero.ToArray)
        ComboBox1.AutoCompleteMode = AutoCompleteMode.SuggestAppend
        ComboBox1.AutoCompleteSource = AutoCompleteSource.ListItems



    End Sub

    Private Sub ComboBox1_KeyDown(sender As System.Object, e As System.Windows.Forms.KeyEventArgs) Handles ComboBox1.KeyDown




        If e.KeyCode = Keys.Enter Then
            'MsgBox("yea")
            ' Try
            Dim numero As String = ComboBox1.SelectedItem.ToString
                Dim arra() As String
                arra = Split(numero, " ")
                numero = arra(0)

                Dim vista As New Ingreso(numero)
                vista.Show()
            'Catch ex As Exception
            '  MsgBox("El numero no existe verificalo")
            'End Try

            ComboBox1.Text = ""
        End If
    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click

    End Sub
End Class
