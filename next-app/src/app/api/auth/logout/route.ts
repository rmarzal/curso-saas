import { NextResponse } from "next/server";
import { getSession } from "@/lib/session";

async function destroy(request: Request) {
  const session = await getSession();
  session.destroy();
  return NextResponse.redirect(new URL("/login", request.url), 303);
}

export async function GET(request: Request) {
  return destroy(request);
}

export async function POST(request: Request) {
  return destroy(request);
}
