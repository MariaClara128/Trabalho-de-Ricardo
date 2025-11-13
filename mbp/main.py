from fastapi import FastAPI
from pydantic import BaseModel
import mysql.connector
from mysql.connector import Error

app = FastAPI(title="API Logística - TechFit")

# Modelo de dados para as entregas
class Entrega(BaseModel):
    id: int
    cliente: str
    destino: str
    status: str

# Função para conectar ao banco MySQL
def db_connection():
    try:
        conn = mysql.connector.connect(
            host="localhost",        # ou IP do seu servidor MySQL
            user="root",             # seu usuário MySQL
            password="",             # sua senha (coloque se tiver)
            database="techfit"       # nome do banco
        )
        return conn
    except Error as e:
        print("Erro ao conectar ao banco:", e)
        return None


# ------------------- ROTAS -------------------

@app.post("/entregas/")
def criar_entrega(entrega: Entrega):
    conn = db_connection()
    if conn:
        cursor = conn.cursor()
        cursor.execute("""
            CREATE TABLE IF NOT EXISTS entregas (
                id INT PRIMARY KEY,
                cliente VARCHAR(255),
                destino VARCHAR(255),
                status VARCHAR(100)
            )
        """)
        conn.commit()

        query = "INSERT INTO entregas (id, cliente, destino, status) VALUES (%s, %s, %s, %s)"
        cursor.execute(query, (entrega.id, entrega.cliente, entrega.destino, entrega.status))
        conn.commit()
        conn.close()
        return {"mensagem": "Entrega criada com sucesso!"}
    else:
        return {"erro": "Falha na conexão com o banco de dados"}


@app.get("/entregas/")
def listar_entregas():
    conn = db_connection()
    if conn:
        cursor = conn.cursor()
        cursor.execute("SELECT * FROM entregas")
        entregas = cursor.fetchall()
        conn.close()
        return {"entregas": entregas}
    else:
        return {"erro": "Falha na conexão com o banco de dados"}


@app.put("/entregas/{entrega_id}")
def atualizar_entrega(entrega_id: int, entrega: Entrega):
    conn = db_connection()
    if conn:
        cursor = conn.cursor()
        query = "UPDATE entregas SET cliente=%s, destino=%s, status=%s WHERE id=%s"
        cursor.execute(query, (entrega.cliente, entrega.destino, entrega.status, entrega_id))
        conn.commit()
        conn.close()
        return {"mensagem": "Entrega atualizada com sucesso!"}
    else:
        return {"erro": "Falha na conexão com o banco de dados"}


@app.delete("/entregas/{entrega_id}")
def deletar_entrega(entrega_id: int):
    conn = db_connection()
    if conn:
        cursor = conn.cursor()
        query = "DELETE FROM entregas WHERE id=%s"
        cursor.execute(query, (entrega_id,))
        conn.commit()
        conn.close()
        return {"mensagem": "Entrega deletada com sucesso!"}
    else:
        return {"erro": "Falha na conexão com o banco de dados"}